<?php
require("db.php");

$sql = "SELECT * FROM users ORDER BY lastname";

$result = mysqli_query($conn, $sql);
?>
