<?php
require("db.php");

$sql = "SELECT * FROM tbldogs ORDER BY name";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>