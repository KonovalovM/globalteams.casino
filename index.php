<?php
require_once 'configs/pdo_ini.php';
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>
            <?php echo "Casino";?>
        </title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="/images/favicon.png" type="image/png"
    </head>

    <body>
        <div>
            <div class="logo">
                <span class="flex">PlayTosh</span>
            </div>
        </div>
        <div class="description">
            <h1>TOP 5 Real Money Online Casino Bonus List!</h1>
            <h6>Play online slots to real money at trusted online casinos in Europe. Claim your exlusive welcome bonus and start playing slots today!</h6>
            <h4>10,302 Claimed Bonuses And Counting!</h4>
        </div>
        <div>
            <div class="table flex">
                <a>CASINO</a>
                <a>WELCOME BONUS</a>
                <a>USER RATING</a>
                <a>RATING</a>
                <a>PLAY NOW</a>
            </div>
        </div>
        <div>
                <?php
                include "modules/list.php";

                ?>
        </div>

        <script src="js/ajax.js"></script>

    </body>

    </html>
