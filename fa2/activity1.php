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
$value = 3;
?>

<table>

    <tr>
        <th colspan="6">Metric Conversions</th>
    </tr>

    <tr>
        <td><?php echo $value; ?> centimetre</td>
        <td>=</td>
        <td><?php echo $value * 10; ?> millimetres</td>
        <td>1 cm</td>
        <td>=</td>
        <td>10 mm</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> decimetre</td>
        <td>=</td>
        <td><?php echo $value * 10; ?> centimetres</td>
        <td>1 dm</td>
        <td>=</td>
        <td>10 cm</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> metre</td>
        <td>=</td>
        <td><?php echo $value * 100; ?> centimetres</td>
        <td>1 m</td>
        <td>=</td>
        <td>100 cm</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> kilometre</td>
        <td>=</td>
        <td><?php echo $value * 1000; ?> metres</td>
        <td>1 km</td>
        <td>=</td>
        <td>1000 m</td>
    </tr>

    <tr>
        <th colspan="6">Imperial Conversions</th>
    </tr>

    <tr>
        <td><?php echo $value; ?> foot</td>
        <td>=</td>
        <td><?php echo $value * 12; ?> inches</td>
        <td>1 ft</td>
        <td>=</td>
        <td>12 in</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> yard</td>
        <td>=</td>
        <td><?php echo $value * 3; ?> feet</td>
        <td>1 yd</td>
        <td>=</td>
        <td>3 ft</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> chain</td>
        <td>=</td>
        <td><?php echo $value * 22; ?> yards</td>
        <td>1 ch</td>
        <td>=</td>
        <td>22 yd</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> furlong</td>
        <td>=</td>
        <td><?php echo $value * 220; ?> yards</td>
        <td>1 fur</td>
        <td>=</td>
        <td>220 yd</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> mile</td>
        <td>=</td>
        <td><?php echo $value * 1760; ?> yards</td>
        <td>1 mi</td>
        <td>=</td>
        <td>1760 yd</td>
    </tr>

    <tr>
        <th colspan="6">Metric → Imperial Conversions</th>
    </tr>

    <tr>
        <td><?php echo $value; ?> millimetre</td>
        <td>=</td>
        <td><?php echo $value * 0.03937; ?> inches</td>
        <td>1 mm</td>
        <td>=</td>
        <td>0.03937 in</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> centimetre</td>
        <td>=</td>
        <td><?php echo $value * 0.39370; ?> inches</td>
        <td>1 cm</td>
        <td>=</td>
        <td>0.39370 in</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> metre</td>
        <td>=</td>
        <td><?php echo $value * 39.37008; ?> inches</td>
        <td>1 m</td>
        <td>=</td>
        <td>39.37008 in</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> metre</td>
        <td>=</td>
        <td><?php echo $value * 3.28084; ?> feet</td>
        <td>1 m</td>
        <td>=</td>
        <td>3.28084 ft</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> metre</td>
        <td>=</td>
        <td><?php echo $value * 1.09361; ?> yards</td>
        <td>1 m</td>
        <td>=</td>
        <td>1.09361 yd</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> kilometre</td>
        <td>=</td>
        <td><?php echo $value * 1093.6133; ?> yards</td>
        <td>1 km</td>
        <td>=</td>
        <td>1093.6133 yd</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> kilometre</td>
        <td>=</td>
        <td><?php echo $value * 0.62137; ?> miles</td>
        <td>1 km</td>
        <td>=</td>
        <td>0.62137 mi</td>
    </tr>

    <tr>
        <th colspan="6">Imperial → Metric Conversions</th>
    </tr>

    <tr>
        <td><?php echo $value; ?> inch</td>
        <td>=</td>
        <td><?php echo $value * 2.54; ?> centimetres</td>
        <td>1 in</td>
        <td>=</td>
        <td>2.54 cm</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> foot</td>
        <td>=</td>
        <td><?php echo $value * 30.48; ?> centimetres</td>
        <td>1 ft</td>
        <td>=</td>
        <td>30.48 cm</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> yard</td>
        <td>=</td>
        <td><?php echo $value * 91.44; ?> centimetres</td>
        <td>1 yd</td>
        <td>=</td>
        <td>91.44 cm</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> yard</td>
        <td>=</td>
        <td><?php echo $value * 0.9144; ?> metres</td>
        <td>1 yd</td>
        <td>=</td>
        <td>0.9144 m</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> mile</td>
        <td>=</td>
        <td><?php echo $value * 1609.344; ?> metres</td>
        <td>1 mi</td>
        <td>=</td>
        <td>1609.344 m</td>
    </tr>

    <tr>
        <td><?php echo $value; ?> mile</td>
        <td>=</td>
        <td><?php echo $value * 1.609344; ?> kilometres</td>
        <td>1 mi</td>
        <td>=</td>
        <td>1.609344 km</td>
    </tr>

</table>

</div>

</body>
</html>