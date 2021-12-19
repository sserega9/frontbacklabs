<?php

// http://frontbacklabs.local/phpmyadmin/ - БД

// Дані для підключення до БД.
$server = "localhost";
$username = "root";
$password = "";
$dbname = "labs";

// Підключення до БД.
$connect = mysqli_connect($server, $username, $password, $dbname);

// Кодування БД.
mysqli_set_charset($connect, 'utf8');

?>