<?php
// Use the db.php file for database connection
require('db.php');

// Fetch content of the tblstudents table
$sql = "SELECT * FROM tblstudents ORDER BY last_name, first_name";
$result = mysqli_query($conn, $sql);
// $rows = mysqli_fetch_assoc($result);

// $result = mysqli_query($conn, $sql)->fetch_assoc();

// It is always a good practice to close your connection after using
mysqli_close($conn);
?>