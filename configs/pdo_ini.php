<?php
$config = include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";

$db = sprintf('mysql:host=%s;dbname=%s', $config['host'], $config['dbname']);
$pdo = new \PDO(
    $db,
    $config['user'],
    $config['pass']
);
