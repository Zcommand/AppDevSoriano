<!DOCTYPE html>
<html>
<head>
    <title>M2FA</title>
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

<!-- MENU -->
<div class="menu">
    <a href="index.php?page=1">Activity 1</a>
    <a href="index.php?page=2">Activity 2</a>
    <a href="index.php?page=3">Activity 3</a>
</div>

<div class="container">

<?php

$page = "";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

/*  ACTIVITY 1 */

if ($page == 1) {
?>

<h2>Length Conversion Chart</h2>

<?php
// givens
$cm = 1;
$dm = 1;
$m = 1;
$km = 1;

$ft = 1;
$yd = 1;
$ch = 1;
$fur = 1;
$mi = 1;
?>

<table>

    <tr>
        <th colspan="6">Metric Conversions</th>
    </tr>

    <tr>
        <td><?php echo $cm; ?> centimetre</td>
        <td>=</td>
        <td><?php echo $cm * 10; ?> millimetres</td>
        <td>1 cm</td>
        <td>=</td>
        <td>10 mm</td>
    </tr>

    <tr>
        <td><?php echo $dm; ?> decimetre</td>
        <td>=</td>
        <td><?php echo $dm * 10; ?> centimetres</td>
        <td>1 dm</td>
        <td>=</td>
        <td>10 cm</td>
    </tr>

    <tr>
        <td><?php echo $m; ?> metre</td>
        <td>=</td>
        <td><?php echo $m * 100; ?> centimetres</td>
        <td>1 m</td>
        <td>=</td>
        <td>100 cm</td>
    </tr>

    <tr>
        <td><?php echo $km; ?> kilometre</td>
        <td>=</td>
        <td><?php echo $km * 1000; ?> metres</td>
        <td>1 km</td>
        <td>=</td>
        <td>1000 m</td>
    </tr>

    <tr>
        <th colspan="6">Imperial Conversions</th>
    </tr>

    <tr>
        <td><?php echo $ft; ?> foot</td>
        <td>=</td>
        <td><?php echo $ft * 12; ?> inches</td>
        <td>1 ft</td>
        <td>=</td>
        <td>12 in</td>
    </tr>

    <tr>
        <td><?php echo $yd; ?> yard</td>
        <td>=</td>
        <td><?php echo $yd * 3; ?> feet</td>
        <td>1 yd</td>
        <td>=</td>
        <td>3 ft</td>
    </tr>

    <tr>
        <td><?php echo $ch; ?> chain</td>
        <td>=</td>
        <td><?php echo $ch * 22; ?> yards</td>
        <td>1 ch</td>
        <td>=</td>
        <td>22 yd</td>
    </tr>

    <tr>
        <td><?php echo $fur; ?> furlong</td>
        <td>=</td>
        <td><?php echo $fur * 220; ?> yards</td>
        <td>1 fur</td>
        <td>=</td>
        <td>220 yd</td>
    </tr>

    <tr>
        <td><?php echo $mi; ?> mile</td>
        <td>=</td>
        <td><?php echo $mi * 1760; ?> yards</td>
        <td>1 mi</td>
        <td>=</td>
        <td>1760 yd</td>
    </tr>

    <tr>
        <th colspan="6">Metric → Imperial Conversions</th>
    </tr>

    <tr>
        <td>1 millimetre</td>
        <td>=</td>
        <td>0.03937 inches</td>
        <td>1 mm</td>
        <td>=</td>
        <td>0.03937 in</td>
    </tr>

    <tr>
        <td><?php echo $cm; ?> centimetre</td>
        <td>=</td>
        <td>0.39370 inches</td>
        <td>1 cm</td>
        <td>=</td>
        <td>0.39370 in</td>
    </tr>

    <tr>
        <td><?php echo $m; ?> metre</td>
        <td>=</td>
        <td>39.37008 inches</td>
        <td>1 m</td>
        <td>=</td>
        <td>39.37008 in</td>
    </tr>

    <tr>
        <td><?php echo $m; ?> metre</td>
        <td>=</td>
        <td>3.28084 feet</td>
        <td>1 m</td>
        <td>=</td>
        <td>3.28084 ft</td>
    </tr>

    <tr>
        <td><?php echo $m; ?> metre</td>
        <td>=</td>
        <td>1.09361 yards</td>
        <td>1 m</td>
        <td>=</td>
        <td>1.09361 yd</td>
    </tr>

    <tr>
        <td><?php echo $km; ?> kilometre</td>
        <td>=</td>
        <td>1093.6133 yards</td>
        <td>1 km</td>
        <td>=</td>
        <td>1093.6133 yd</td>
    </tr>

    <tr>
        <td><?php echo $km; ?> kilometre</td>
        <td>=</td>
        <td>0.62137 miles</td>
        <td>1 km</td>
        <td>=</td>
        <td>0.62137 mi</td>
    </tr>

    <tr>
        <th colspan="6">Imperial → Metric Conversions</th>
    </tr>

    <tr>
        <td>1 inch</td>
        <td>=</td>
        <td>2.54 centimetres</td>
        <td>1 in</td>
        <td>=</td>
        <td>2.54 cm</td>
    </tr>

    <tr>
        <td><?php echo $ft; ?> foot</td>
        <td>=</td>
        <td>30.48 centimetres</td>
        <td>1 ft</td>
        <td>=</td>
        <td>30.48 cm</td>
    </tr>

    <tr>
        <td><?php echo $yd; ?> yard</td>
        <td>=</td>
        <td>91.44 centimetres</td>
        <td>1 yd</td>
        <td>=</td>
        <td>91.44 cm</td>
    </tr>

    <tr>
        <td><?php echo $yd; ?> yard</td>
        <td>=</td>
        <td>0.9144 metres</td>
        <td>1 yd</td>
        <td>=</td>
        <td>0.9144 m</td>
    </tr>

    <tr>
        <td><?php echo $mi; ?> mile</td>
        <td>=</td>
        <td>1609.344 metres</td>
        <td>1 mi</td>
        <td>=</td>
        <td>1609.344 m</td>
    </tr>

    <tr>
        <td><?php echo $mi; ?> mile</td>
        <td>=</td>
        <td>1.609344 kilometres</td>
        <td>1 mi</td>
        <td>=</td>
        <td>1.609344 km</td>
    </tr>

</table>

<?php

}






/*  ACTIVITY 2 */

elseif ($page == 2) {

?>
<h2>Grade Ranking System</h2>

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



}





/*  ACTIVITY 3 */

elseif ($page == 3) {

?>

<h2>Two-Digit Combinations</h2>

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
}

else {
    echo "<h2>Select an Activity Above</h2>";
}
?>

</div>

</body>
</html>