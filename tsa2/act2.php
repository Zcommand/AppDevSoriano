<?php
$pageTitle = "Volume of Shapes (User Defined Function)";

function volumes($cube, $length, $width, $height, $radius, $pi, $coneHeight)
{
    $cubeVolume = $cube * $cube * $cube;
    $prismVolume = $length * $width * $height;
    $cylinderVolume = $pi * $radius * $radius * $height;
    $coneVolume = (1 / 3) * $pi * $radius * $radius * $coneHeight;
    $sphereVolume = (4 / 3) * $pi * $radius * $radius * $radius;

    return [
        "cube" => $cubeVolume,
        "prism" => $prismVolume,
        "cylinder" => $cylinderVolume,
        "cone" => $coneVolume,
        "sphere" => $sphereVolume
    ];
}

$result = volumes(3, 5, 4, 6, 2, 3.14, 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <div class="header">
        Volume of Shapes
    </div>

    <table>
        <tr>
            <th>Shape</th>
            <th>Formula</th>
            <th>Result</th>
        </tr>

        <tr>
            <td>Cube (a = 3)</td>
            <td>a³</td>
            <td><?= $result["cube"] ?></td>
        </tr>

        <tr>
            <td>Rectangular Prism (l=5, w=4, h=6)</td>
            <td>l × w × h</td>
            <td><?= $result["prism"] ?></td>
        </tr>

        <tr>
            <td>Cylinder (r=2, h=6)</td>
            <td>πr²h</td>
            <td><?= $result["cylinder"] ?></td>
        </tr>

        <tr>
            <td>Cone (r=2, h=5)</td>
            <td>(1/3)πr²h</td>
            <td><?= $result["cone"] ?></td>
        </tr>

        <tr>
            <td>Sphere (r=2)</td>
            <td>(4/3)πr³</td>
            <td><?= $result["sphere"] ?></td>
        </tr>

    </table>

    <a class="return-btn" href="index.php">Return to Main Menu</a>

</div>

</body>
</html>