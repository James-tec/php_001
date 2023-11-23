<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dbName = "phpproject001";

$conn = mysqli_connect($servename, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>