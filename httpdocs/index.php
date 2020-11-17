<!--
I want to allow someone to enter a custom token address. That one will be easy to implement through a selector option "custom" which temporarily adds. I also want to create a whitelist system.

It might also be interesting to allow people to create their own contract without coding, using a basic form to enter some details, kind of like JustSwap. I'd have to learn how to custom compile code though.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arcadium Project</title>

        <!-- CHARSET AND VIEWPORT METAS AT THE TOP, BELOW TITLE ALWAYS. -->
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- NOW SOME DESCRIPTION METAS -->
        <meta name="description" content="Arcadium Blockchain Game Engine">
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
                            <h1 class="text-white">Arcadium Project</h1>
                            <p class="text-success">A World Builder Project Supporting Entertainment</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="card glassPanel border-light rcAll">
                  <div class="card-header glassPanel text-white rcTop">About Arcadium</div>
                  <div class="card-body text-white">
                    The entertainment industry is massive. And it should be. Entertainment is not a lurxury, but a necessity. It helps us relax, and reduce negative stress. It is good for our health. Arcadium's mission is to use blockchain technology to improve the entertainment industry. We plan on offering many services to game developers, streamers, and other kinds of entertainers. We seek to make entertainment easier to access, more enjoyable, and better for everyone.
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
