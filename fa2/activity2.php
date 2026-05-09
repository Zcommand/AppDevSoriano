<!DOCTYPE html>
<html>
<head>
    <title>Activity 2</title>
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

<h2>Grade Ranking System</h2>

<a href="index.php" class="back-btn">← Return to Main Menu</a>

<form method="post">
    <input type="text" name="fname" placeholder="First Name" required><br>
    <input type="text" name="mi" placeholder="Middle Initial" required><br>
    <input type="text" name="lname" placeholder="Last Name" required><br>
    <input type="number" name="grade" placeholder="Enter Grade" required><br>

    <button type="submit" name="submit">Submit</button>
</form>

<?php

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $mi = $_POST['mi'];
    $lname = $_POST['lname'];
    $grade = $_POST['grade'];

    // Rank + emotion image
    if ($grade >= 93 && $grade <= 100) {
        $rank = "A";
        $img = "img/happy.png";
    } elseif ($grade >= 90) {
        $rank = "A-";
        $img = "img/happy.png";
    } elseif ($grade >= 87) {
        $rank = "B+";
        $img = "img/smile.png";
    } elseif ($grade >= 83) {
        $rank = "B";
        $img = "img/smile.png";
    } elseif ($grade >= 80) {
        $rank = "B-";
        $img = "img/neutral.png";
    } elseif ($grade >= 77) {
        $rank = "C+";
        $img = "img/neutral.png";
    } elseif ($grade >= 73) {
        $rank = "C";
        $img = "resources/img/sad.png";
    } elseif ($grade >= 70) {
        $rank = "C-";
        $img = "resources/img/sad.png";
    } elseif ($grade >= 67) {
        $rank = "D+";
        $img = "resources/img/sad.png";
    } elseif ($grade >= 63) {
        $rank = "D";
        $img = "resources/img/sad.png";
    } elseif ($grade >= 60) {
        $rank = "D-";
        $img = "resources/img/cry.png";
    } else {
        $rank = "F";
        $img = "img/cry.png";
    }

    echo "<div class='name-box'>
            Name: $fname $mi. $lname
        </div>";

    echo "<div class='row'>

            <div class='box'>
                Rank<br>$rank
            </div>

            <div class='box'>
                Grade<br>$grade
            </div>

            <div class='box'>
                Emotion<br>
                <img src='$img' width='80'>
            </div>

        </div>";
}
