<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arcadium Twitch Bot</title>

        <!-- CHARSET AND VIEWPORT METAS AT THE TOP, BELOW TITLE ALWAYS. -->
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- NOW SOME DESCRIPTION METAS -->
        <meta name="description" content="Arcadium Titles">
        <meta name="keywords" content="cryptocurrency, crypto, blockchain, games, arcade">

        <!-- CSS, ICONS AND BOOTSTRAP -->
        <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/arcadium.css" />
        <link rel="icon" type="image/png" href="assets/img/etc.png">

        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/f352960784.js" crossorigin="anonymous"></script>
    </head>

    <body class="wallpaper">
        <?php include('modules/navbar.php'); ?>

        <!-- SPACING OF 5 BR'S NECESSARY FOR TOP OF CONTENT TO SHOW WITH STICKY NAVBAR. -->
        <br /><br /><br /><br /><br />

        <!-- MAIN CONTENT DIV -->
        <div class="container">
            <div class="row jumbotron glassPanel rcAll">
                <div class="container">
                    <div class="row">
                        <div class="col text-left">
                            <h1 class="text-white">Introducing Arcadium Titles</h1>
                            <p class="text-success">A Multi-Game NFT</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card glassPanel border-light rcAll">
                <div class="card-header glassPanel text-white rcTop">The Basics</div>
                <div class="card-body text-white">
                  Titles are an exciting addition coming to Arcadium in the near future. A title is a special NFT, with a few different functions. First, it shows status. Different ranks of titles will be available for purhcase or crafting. More importantly, these titles will unlock various features in many of our games. This feature makes titles fairly unique. Usually NFTs are meant to be used in a single product. Titles will be useful in a various of dapps created by Arcadium and its partners.
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card glassPanel border-light rcAll">
              <div class="card-header glassPanel text-white rcTop">Staking</div>
              <div class="card-body text-white">
                Titles will also have an important staking element. In order to create a title of a given rank, a user needs two things: a title of rank one higher than the one being created, and a certain amount of ARC tokens. Part of that ARC will be locked away forever. The rest will be distributed to people who hold the titles of the same rank. This process increases the value of ARC, and gives value to the titles themselves, even before considering their future utility in games.
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- Project Dependencies -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/tronweb.js"></script>

        <!-- Dapp Scripts -->
    </body>
</html>
