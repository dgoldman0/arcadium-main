<!--
I want to allow someone to enter a custom token address. That one will be easy to implement through a selector option "custom" which temporarily adds. I also want to create a whitelist system.

It might also be interesting to allow people to create their own contract without coding, using a basic form to enter some details, kind of like JustSwap. I'd have to learn how to custom compile code though.
-->
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
        <link rel="stylesheet" href="assets/css/world.css" />
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
                            <h1 class="text-white">Arcadium Engine</h1>
                            <p class="text-success">A fun gaming and entertainment experience for blockchain professionals and novices alike.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">
                    <div class="card glassPanel border-light rcAll">
                        <div class="card-header glassPanel text-white rcTop">Game Mode</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-left">
                                        <p class="text-white">
                                          <textarea class="span6" rows="3" placeholder="What's up?" required></textarea>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer glassPanel rcBottom">
                            <div class="row">
                                <div class="col text-center">
                                  <input type = "text" style = "width: 100%; display: flex; flex: 1;"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card glassPanel border-light rcAll">
                        <div class="card-header glassPanel text-white rcTop">Players</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer glassPanel rcBottom">
                            <div class="row">
                                <div class="col text-center">
                                </div>
                            </div>
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
