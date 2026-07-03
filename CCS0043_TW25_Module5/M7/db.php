<?php
// Variables need to store connection values
$host = "localhost";
$user = "root";
$password = "";
$dbname = "stud_profile";

// Create a connection object and connect to the database
$conn = mysqli_connect($host, $user, $password, $dbname);
// $conn = new mysqli($host, $user, $password, $dbname); // OOP method

// Check if the connection is OK
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}

?>