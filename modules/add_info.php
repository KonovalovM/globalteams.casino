<?php
require_once '../configs/pdo_ini.php';

$ip = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set("Europe/Kiev");
$date = date('Y/m/d H:i:s');
$date1 = date('Y-m-d');

if (isset($_POST)) {
    $_button_id = $_POST['button_id'];

    $sth = $pdo->prepare("INSERT INTO info (`user_ip`, `date_time`, `button_id`) VALUES ('" . $ip . "', '" . $date . "', '" . $_POST["button_id"] . "')");
    $sth->setFetchMode(\PDO::FETCH_ASSOC);
    $sth->execute();

    $file = Fopen("$date1-click.log", "a");
    $text = "IP-adress: $ip, Date: $date, Button id: $_button_id;
    ";
    $con = fwrite($file, $text);

}
include "../index.php";
