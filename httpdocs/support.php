<!--
I want to allow someone to enter a custom token address. That one will be easy to implement through a selector option "custom" which temporarily adds. I also want to create a whitelist system.

It might also be interesting to allow people to create their own contract without coding, using a basic form to enter some details, kind of like JustSwap. I'd have to learn how to custom compile code though.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Support the Arcadium Project</title>

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
                            <h1 class="text-white">Support Us</h1>
                            <p class="text-success">Arcadium is working to improve access to entertainment, making it more affordable while also helping content creators with their content. But we need your help too.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="card glassPanel border-light rcAll">
                    <div class="card-header glassPanel text-white rcTop">Ways You Can Help</div>
                    <div class="card-body text-white">
                      <ul>
                        <li>We need people who are willing to <a href = "http://arcadium.fun/resources.php">donate resources</a>, such as copyright free background music and images, so content creators don't have to spend as much to get started.</li>
                        <li>We could use financial support as well, and happily accept donations.</li>
                      </ul>
                      <hr/>
                      <script src='https://storage.ko-fi.com/cdn/scripts/overlay-widget.js'></script>
                      <script>
                        kofiWidgetOverlay.draw('arcadium', {
                          'type': 'floating-chat',
                          'floating-chat.donateButton.text': 'Support Us',
                          'floating-chat.donateButton.background-color': '#ff5f5f',
                          'floating-chat.donateButton.text-color': '#fff'
                        });
                      </script>
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
