<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/configs/pdo_ini.php";
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>
            <?php echo "ADMIN";?>
        </title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/login.css">
        <link rel="shortcut icon" href="/images/favicon.png" type="image/png"
    </head>

    <body>
        <div class="">
            <div id="menu">
                <?php
                if ( isset ( $_COOKIE["user_id"] ) ) {
                    ?>
                    <a href = "/admin/parts/exit.php">Exit</a>
                    <?php
                }
                ?>
            </div>
            <div class="logo">
                <span class="flex">PlayTosh</span>
            </div>
        </div>

        <!--    Login form -->
        <div class="enter" id="enter-form" <?php if (isset($_COOKIE["user_id"])){?> style="display: none"<?php } ?>>
            <span class="flex"><b><i>ENTER</i></b></span>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/login.php";
            ?>
                <div></div>
                <form action="/admin/index.php" method="POST">
                    <input type="email" id="email" name="email" placeholder="Enter you e-mail" title="Enter you e-mail">
                    <input type="password" id="password" name="password" placeholder="Enter you pasword" title="Enter you pasword">
                    <button type="submit" id="enter"><b>ENTER</b></button>
                    <a href="#" id="open-registration"><b>Registration</b></a>
                </form>
        </div>

        <!--    Registration form-->
        <div class="registration" id="registration-form">
            <span class="flex"><b><i>Registration form</i></b></span>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/registration.php";
            ?>
                <div class="close2">X</div>
                <form method="POST">
                    <input type="text" id="name" name="name" placeholder="Enter you name" title="Enter you name">
                    <input type="email" id="email2" name="email" placeholder="Enter you e-mail" title="Enter you e-mail">
                    <input type="password" id="password2" name="password" placeholder="Enter you pasword" title="Enter you pasword">
                    <input type="password" id="password3" name="password3" placeholder="Enter you pasword again" title="Enter you pasword again">
                    <button type="submit" id="sign-up"><b>Sign up</b></button>
                </form>
        </div>
        <?php

        if (isset($_COOKIE["user_id"])){
        ?>

        <div class="head flex">
            <a href="/admin/?sort=date_time"><h3>YEAR</h3></a>
            <a href="/admin/?sort=date_time"><h3>MONTH</h3></a>
            <a href="/admin/?sort=user_ip"><h3>IP</h3></a>
            <a href="/admin/?sort=button_id"><h3>BUTTON ID</h3></a>
            <a href="/admin/?sort=count_of_clicks"><h3>COUNT OF CLICKS</h3></a>
        </div>
        <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/info.php";
        }
        ?>

        <script src="/js/var.js"></script>
        <script src="/js/script.js"></script>

    </body>

    </html>
