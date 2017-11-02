<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "accounts";
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

?>