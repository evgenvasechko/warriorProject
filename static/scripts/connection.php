<?php
$driver = 'mysql';
$host = 'localhost';
$db_name = 'realvotiva';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false];

$dsn = "$driver:host=$host;dbname=$db_name;charset=$charset";

$connection = new PDO($dsn, $db_user, $db_pass, $options);

// =.+-AYXjRspf