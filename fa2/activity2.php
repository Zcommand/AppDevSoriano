<!DOCTYPE html>
<html>

<head>
    <title>Activity 2</title>
    <link rel="stylesheet" href="resources/style.css">
</head>

<body>


    <div class="header">
        <div class="left">
            Name: John Ronen Soriano <br>
            Section: BSIT-WMA/TW25
        </div>

        <div class="right">
            M2FA
        </div>
    </div>

    <div class="container">

        <h2>Grade Ranking System</h2>

        <a href="index.php" class="back-btn">← Return to Main Menu</a>

        <form method="post">
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="mi" placeholder="Middle Initial" required>
            <input type="text" name="lname" placeholder="Last Name" required>
            <input type="number" name="grade" placeholder="Enter Grade" required>
            <button type="submit">Submit</button>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $fname = $_POST['fname'];
            $mi = $_POST['mi'];
            $lname = $_POST['lname'];
            $grade = $_POST['grade'];

            if ($grade >= 93 && $grade <= 100) {
                $rank = "A";
                $img = "resources/img/happy.png";
            } elseif ($grade >= 90) {
                $rank = "A-";
                $img = "resources/img/happy.png";
            } elseif ($grade >= 87) {
                $rank = "B+";
                $img = "resources/img/smile.png";
            } elseif ($grade >= 83) {
                $rank = "B";
                $img = "resources/img/smile.png";
            } elseif ($grade >= 80) {
                $rank = "B-";
                $img = "resources/img/neutral.png";
            } elseif ($grade >= 77) {
                $rank = "C+";
                $img = "resources/img/neutral.png";
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
                $img = "resources/img/cry.png";
            }

            echo "
        <div class='profile-card'>

    <div class='name-section'>
        Name: $fname $mi. $lname
    </div>

    <div class='grid-section'>

        <div class='card-box'>
            Rank<br><b>$rank</b>
        </div>

        <div class='card-box'>
            Grade<br><b>$grade</b>
        </div>

        <div class='card-box'>
            
            <img src='$img'>
        </div>

    </div>

</div>";
        }
        ?>

    </div>

</body>

</html>