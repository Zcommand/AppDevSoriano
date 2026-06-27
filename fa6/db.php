<?php

$host = "localhost";
$user = "root";
$password = "root";
$dbname = "dog_information";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>