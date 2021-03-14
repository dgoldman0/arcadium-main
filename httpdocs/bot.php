<!--
I want to allow someone to enter a custom token address. That one will be easy to implement through a selector option "custom" which temporarily adds. I also want to create a whitelist system.

It might also be interesting to allow people to create their own contract without coding, using a basic form to enter some details, kind of like JustSwap. I'd have to learn how to custom compile code though.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arcadium Twitch Bot</title>

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
                            <h1 class="text-white">Arcadium Bot</h1>
                            <p class="text-success">Arcadium Bot is a Twitch bot with a lot of fun commands.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="card glassPanel border-light rcAll">
                    <div class="card-header glassPanel text-white rcTop">About</div>
                    <div class="card-body text-white">
                      Arcadium_bot is a Twitch bot developed for the Arcadium project. It's still in its early stages of development, but will be available for use by anyone who wants it. Additionally, there will be numerous features that can be used only on Arcadium_bot's own stream, which will eventually stream continuously in the future.
                      <br/>
                      <img src = "/assets/img/Arcadium.png" height = "300px"/>
                      <br/>
                      <b>Twitch: </b> <a href = "https://www.twitch.tv/arcadium_bot">@arcadium_bot</a>
                    </div>
                  </div>
              </div>
              <div class = "col-md-6">
                  <div class="card glassPanel border-light rcAll">
                    <div class="card-header glassPanel text-white rcTop">Economy</div>
                    <div class="card-body text-white">
                      Arcadium Bot uses an internal "silver" based economy. Silver is similar to channel points, and can be obtained in a variety of ways, including by competing in channel battles. Each channel has its own version of silver, just like each channel has its own channel points. However, some commands need silver from Arcadium_bot's own stream. To collect silver, channel owners can compete in battles in Arcadium_bot's stream, or get tips.
                    </div>
                  </div>
              </div>
            </div>
            </br></br>
            <div class="row">
              <div class="col-md-3">
                  <div class="card glassPanel border-light rcAll">
                    <div class="card-header glassPanel text-white rcTop">Basic Commands</div>
                    <div class="card-body text-white">
                      !join channel - Type this in my chat to have me join a channel. Your username must match the channel name (prevents spamming).
                      <br/>
                      <br/>
                      !shoo - If I'm in your channel and want me to leave, no problem.
                    </div>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="card glassPanel border-light rcAll">
                  <div class="card-header glassPanel text-white rcTop">Custom Commands</div>
                  <div class="card-body text-white">
                  It's possible to add custom commands to your channel. Customization is limited right now, but will improve in the future.
                  <hr/>
                  !addcommand [command-name] [command] - Creates a new command ![command-name] with text [command]. The maximum length of the command is roughly 5,000 characters.
                  <br/></br>
                  !remove [command-name] - removes custom command ![command-name] from the system.
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card glassPanel border-light rcAll">
                  <div class="card-header glassPanel text-white rcTop">Tournaments</div>
                  <div class="card-body text-white">
                    This is a work in progress battle simulator. Right now there's only one option: single elimination tournaments. Eventually there will be more options, you'll be able to rank up as a player, and you'll eventually get rewards too.<hr/>
                    Battle results are given in channel, but the full battle details can be found <a href = "http://arcadium.fun/bot/battle.php">here</a>.
                    <hr/>
                    !newbattle [players] - a mod can start a new battle for the channel
                    <br/></br>
                    !brawl - join a battle that's waiting to start
                  </div>
                </div>
              </div>
            </div>
            </br></br>
            <div class="row">
              <div class="col-md-6">
                <div class="card glassPanel border-light rcAll">
                  <div class="card-header glassPanel text-white rcTop">Counter</div>
                  <div class="card-body text-white">
                    Arcadium has a built in counter function. It's pretty easy to use but might be a little confusing if you're used to other bots. Counters start with a dollar sign($). All counters start at 0 by default.
                    <hr/>
                    $[counter] - start a new counter or get the current value of counter, if it already exists.
                    <br/><br/>
                    $[counter] +[value] - add [value] to counter named [counter]. This value will be converted to an integer even if a deciminal is used.
                    <br/><br/>
                    $[counter] =[value] - set [counter] to [value]
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card glassPanel border-light rcAll">
                  <div class="card-header glassPanel text-white rcTop">Food Options</div>
                  <div class="card-body text-white">
                    !omakase - Serve a random type of sushi
                    <br/>
                    <br/>
                    !snack - Serve a random snack
                    <br/>
                    <br/>
                    !cheese - Everyone likes cheese, right?
                    <br/>
                    <br/>
                    !nomu - Serve a random alcoholic beverage. Drink responsibly
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                  <div class="card glassPanel border-light rcAll">
                    <div class="card-header glassPanel text-white rcTop">Pog Evolutions</div>
                    <div class="card-body text-white">
                      This is a very simple game where you can vote for various pog evolution forms.
                      <br/>
                      <br/>
                      !ereset - Used by channel mods to reset voting
                      <br/>
                      <br/>
                      !elist - List current voting results
                      <br/>
                      <br/>
                      !evote from to - Take a vote from one evolution and give it to another
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
