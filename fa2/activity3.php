<!DOCTYPE html>
<html>
<head>
    <title>Activity 1</title>
    <link rel="stylesheet" href="resources/style.css">
</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="left">
        Name: John Ronen Soriano <br>
        Section: BSIT-WMA/TW25
    </div>

    <div class="right">
        M2FA
    </div>
</div>

<h2>Two-Digit Combinations</h2>

<a href="index.php" class="back-btn">← Return to Main Menu</a>

<div class="combination-box">

<?php

for ($i = 0; $i <= 99; $i++) {

    if ($i < 10) {
        echo "0$i";
    } else {
        echo $i;
    }

    if ($i < 99) {
        echo ", ";
    }
}

?>

</div>

<?php