<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "softdrinksorganiser";


//conectare baza de date
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
$conn->set_charset('utf8');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
