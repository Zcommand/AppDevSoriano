<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>

    <style>
        body {
            font-family: 'Times New Roman', serif;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            border-collapse: collapse;
            margin: auto;
            border: 2px solid #333;
        }

        td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            width: 50px;
            height: 50px;
        }

        .yellow {
            background-color: #FFFF00;
        }

        .red {
            background-color: #FF0000;
        }
    </style>
</head>

<body>

<h1>Multiplication Table</h1>

<table>

<?php
$maxNumber = 10;

for ($row = 0; $row <= $maxNumber; $row++) {
    echo "<tr>";

    for ($col = 0; $col <= $maxNumber; $col++) {

        $product = $row * $col;

        $colorClass = (($row + $col) % 2 == 0) ? "yellow" : "red";

        echo "<td class='$colorClass'>$product</td>";
    }

    echo "</tr>";
}
?>

</table>

</body>
</html>