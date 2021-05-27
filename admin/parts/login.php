<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/configs/pdo_ini.php";

if (isset($_POST ["email"]) && isset ($_POST ["password"]) && $_POST["email"] != "" && $_POST ["password"] != ""){

    $sth = $pdo->prepare("SELECT * FROM `users` WHERE `email` LIKE '" . $_POST["email"] . "' AND `password` LIKE '" . $_POST["password"] . "'");

    $sth->setFetchMode(\PDO::FETCH_ASSOC);
    $sth->execute();
    $users = $sth->fetchAll();

    if ($users != null){
        foreach ($users as $user):
        setcookie("user_id", $user["id"], time()+ 60*60);
        endforeach;
        header ("location: /admin");
        }else {
        echo "<h style=> LOGIN OR PASSWORD IS INCORRECTLY </h2>";
    }
    }
echo "<h style=> ENTER LOGIN AND PASSWORD </h2>";
