<!--
I want to allow someone to enter a custom token address. That one will be easy to implement through a selector option "custom" which temporarily adds. I also want to create a whitelist system.

It might also be interesting to allow people to create their own contract without coding, using a basic form to enter some details, kind of like JustSwap. I'd have to learn how to custom compile code though.
-->
<?php
$servername = "98.15.196.137";
$username = "arcadium";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arcadium Engine</title>

        <!-- CHARSET AND VIEWPORT METAS AT THE TOP, BELOW TITLE ALWAYS. -->
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- NOW SOME DESCRIPTION METAS -->
        <meta name="description" content="Arcadium Blockchain Game Engine">
        <meta name="keywords" content="cryptocurrency, crypto, blockchain, games, arcade">

        <!-- CSS, ICONS AND BOOTSTRAP -->
        <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/css/arcadium.css" />
        <link rel="icon" type="image/png" href="/assets/img/etc.png">

        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/f352960784.js" crossorigin="anonymous"></script>
    </head>

    <body class="wallpaper">
        <?php include('/modules/navbar.php'); ?>

        <!-- SPACING OF 5 BR'S NECESSARY FOR TOP OF CONTENT TO SHOW WITH STICKY NAVBAR. -->
        <br /><br /><br /><br /><br />

        <!-- MAIN CONTENT DIV -->
        <div class="container">
            <div class="row jumbotron glassPanel rcAll">
                <div class="container">
                    <div class="row">
                        <div class="col text-left">
                            <h1 class="text-white">Arcadium Bot</h1>
                            <p class="text-success">Arcadium Bot is a Twitch bot with a lot of fun commands.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                  <div class="card glassPanel border-light rcAll">
                    <div class="card-header glassPanel text-white rcTop">Battle History</div>
                    <div class="card-body text-white">
                      <table class = "table">
                        <tr>
                          <th>Channel</th>
                          <th>Battle ID</th>
                          <th>Battle Type</th>
                          <th>Winner</th>
                        </tr>
                        <?php
                          $channel = $_GET["channel"];
                          $sql = "SELECT * FROM battles";
                          if (isset($channel)) {
                            $sql = "SELECT * FROM battles WHERE channel = \'" + $channel  + "\'";
                          }
                          echo $channel;
                          echo "<br/>";
                          echo $sql;
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              ?>
                              <tr>
                                <td>$row["Channel"]</td>
                                <td>$row["battle_id"]</td>
                                <td>$row["type"]</td>
                                <td>$row["winner"]</td>
                              </tr>
                              <?php
                            }
                          }
                        ?>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <!-- Project Dependencies -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/tronweb.js"></script>

        <!-- Dapp Scripts -->
        <script src = 'assets/js/db.js'></script>
    </body>
</html>
