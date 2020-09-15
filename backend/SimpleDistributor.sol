pragma solidity ^0.4.24;

/* A simple contract to sink and distribute tokens locked from minting and other operations */

contract Owned {
  address public owner;
  address public oldOwner;
  uint public tokenId = 1002567;
  uint lastChangedOwnerAt;
  constructor() {
    owner = msg.sender;
    oldOwner = owner;
  }
  modifier isOwner() {
    require(msg.sender == owner);
    _;
  }
  modifier isOldOwner() {
    require(msg.sender == oldOwner);
    _;
  }
  modifier sameOwner() {
    address addr = msg.sender;
    // Ensure that the address is a contract
    uint size;
    assembly { size := extcodesize(addr) }
    require(size > 0);

    // Ensure that the contract's parent is
    Owned own = Owned(addr);
    require(own.owner() == owner);
     _;
  }
  // Be careful with this option!
  function changeOwner(address newOwner) isOwner {
    lastChangedOwnerAt = now;
    oldOwner = owner;
    owner = newOwner;
  }
  // Allow a revert to old owner ONLY IF it has been less than a day
  function revertOwner() isOldOwner {
    require(oldOwner != owner);
    require((now - lastChangedOwnerAt) * 1 seconds < 86400);
    owner = oldOwner;
  }
}


// Current issue: calculation of max isn't right, and I need to make sure I can't withdraw more than the token balance!

// Locking may need to be done in order to prevent out of order transactions...
contract SimpleDistributor is Owned {
  uint256 lastCalculated;
  uint256 bank; // Calculated bank that can be withdrawn
  function () external payable {
    uint256 oldlC = lastCalculated;
    uint256 cur = now;
    // Problem is whether the balance is updated for deposit immediately or after the function runs
    uint256 max = address(this).tokenBalance(tokenId) - bank;
    uint256 amt = max * (cur-oldlC) / 60000000;
    if (max < amt) amt = max;
    bank += amt;
    lastCalculated = cur;
  }
  // Calculate amount that can be withdrawn
  function withdraw() public isOwner returns (bool success) {
    uint256 cur = now;
    uint256 bal = address(this).tokenBalance(tokenId);
    uint256 oldlC = lastCalculated;
    uint256 oldBank = bank;
    bank = 0;
    lastCalculated = cur;
    // If there's less than 100,000 WRLD left, just pull everything out.
    if (bal < 100000000000) {
      owner.transferToken(bal, tokenId);
    } else {
      // Problem is whether the balance is updated for deposit immediately or after the function runs
      uint256 max = bal - oldBank;
      uint256 amt = max * (cur-oldlC) / 60000000;
      if (max < amt) amt = max;
      owner.transferToken(oldBank + amt, tokenId);
    }
  }
  // Allow withdraw of accidental other transfers, such as TRX et al.
  function withdrawToken(uint256 id) public isOwner {
    require(id != tokenId); // Can't withdraw WRLD this way!
    owner.transferToken(this.tokenBalance (id), id);
  }
}
