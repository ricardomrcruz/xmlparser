<?php

$host= 'mysql:host=localhost;dbname=labddevcbdeau'; //server n database
$login= 'leusdevcbdeau';
$password= 'R0ivs8$11';
$options= array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // to manage errors
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //to force utf8
);

$pdo = new PDO( $host, $login, $password, $options);

// variable to display user messages (empty by default)

$msg = '';