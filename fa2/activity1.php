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

<div class="container">

<a href="index.php" class="back-btn">← Return to Main Menu</a>

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

