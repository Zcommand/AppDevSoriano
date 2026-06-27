<?php
require("db.php");

$title = "Dog Registration";

$message = "";
$type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dog_name = $_POST["dog_name"];
    $breed = $_POST["breed"];
    $age = (int) $_POST["age"];
    $address = $_POST["address"];
    $color = $_POST["color"];

    $height = $_POST["height"] . " ft";
    $weight = $_POST["weight"] . " kg";

    $sql = "INSERT INTO tbldogs
        (name, breed, age, address, color, height, weight)
        VALUES
        (
            '$dog_name',
            '$breed',
            $age,
            '$address',
            '$color',
            '$height',
            '$weight'
        )";

    if (mysqli_query($conn, $sql)) {
        $message = "Dog information saved successfully.";
        $type = "success";
    } else {
        $message = "Error: " . mysqli_error($conn);
        $type = "danger";
    }
}
