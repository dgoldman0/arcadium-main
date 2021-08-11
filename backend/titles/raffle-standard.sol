// A standard contract for raffles connected to Titles

pragma solidity ^0.8.0;

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
  function changeOwner(address newOwner) public isOwner {
    lastChangedOwnerAt = now;
    oldOwner = owner;
    owner = newOwner;
  }
  // Allow a revert to old owner ONLY IF it has been less than a day
  function revertOwner() public isOldOwner {
    require(oldOwner != owner);
    require((now - lastChangedOwnerAt) * 1 seconds < 86400);
    owner = oldOwner;
  }
}

contract ForgableToken is Owned {
/// @return total amount of tokens
  function totalSupply() public view returns (uint256 supply) {}
  /// @param _owner The address from which the balance will be retrieved
  /// @return The balance
  function balanceOf(address _owner) public view returns (uint256 balance) {}
  /// @notice send `_value` token to `_to` from `msg.sender`
  /// @param _to The address of the recipient
  /// @param _value The amount of token to be transferred
  /// @return Whether the transfer was successful or not
  function transfer(address _to, uint256 _value) returns (bool success) {}
  /// @notice send `_value` token to `_to` from `_from` on the condition it is approved by `_from`
  /// @param _from The address of the sender
  /// @param _to The address of the recipient
  /// @param _value The amount of token to be transferred
  /// @return Whether the transfer was successful or not
  function transferFrom(address _from, address _to, uint256 _value) returns (bool success) {}
  /// @notice `msg.sender` approves `_addr` to spend `_value` tokens
  /// @param _spender The address of the account able to transfer the tokens
  /// @param _value The amount of wei to be approved for transfer
  /// @return Whether the approval was successful or not
  function approve(address _spender, uint256 _value) returns (bool success) {}
  /// @param _owner The address of the account owning tokens
  /// @param _spender The address of the account able to transfer the tokens
  /// @return Amount of remaining tokens allowed to spent
  function allowance(address _owner, address _spender) public view returns (uint256 remaining) {}
  /// @return Whether the forging was successful or not

  // Forge specific properties that need to be included in the contract
  function forge() external payable returns (bool success) {}
  function maxForge() public view returns (uint256 amount) {}
  function baseConversionRate() public view returns (uint256 best_price) {}
  function timeToForge(address addr) public view returns (uint256 time) {}
  function forgePrice() public view returns (uint256 price) {}
  function smithCount() public view returns (uint256 count) {}
  function smithFee() public view returns (uint256 fee) {}
  function canSmith() public view returns (bool able) {}
  function totalWRLD() public view returns (uint256 wrld) {}
  function firstMint() public view returns (uint256 date) {}
  function lastMint() public view returns (uint256 date) {}
  function paySmithingFee() external payable returns (bool fee) {}

  event Transfer(address indexed _from, address indexed _to, uint256 _value);
  event Approval(address indexed _owner, address indexed _spender, uint256 _value);
  event Forged(address indexed _to, uint _cost, uint _amt);
  event NewSmith(address indexed _address, uint _fee);
}

// Raffle Tickets
contract RaffleTicket {
  constructor() {
  }
  // Ends the raffle and prevents tickets from being traded, or the creatoin of new tickets
  function endRaffle() public isOwner {

  }
