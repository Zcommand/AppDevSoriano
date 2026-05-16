<?php
$pageTitle = "Array Operations - Database View";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$sum = array_sum($numbers);

$diff = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $diff -= $numbers[$i];
}

$product = array_product($numbers);

$quotient = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $quotient /= $numbers[$i];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title><?= $pageTitle ?></title>

<style>
:root {
    --green: #006b3c;
    --dark-green: #004d2a;
    --border: #ddd;
    --radius: 10px;
    --padding: 15px;
    --font: Arial, sans-serif;
    --bg: #f2f6f3;
}

body {
    font-family: var(--font);
    background: var(--bg);
    padding: 20px;
}

.container {
    width: 90%;
    max-width: 1000px;
    margin: auto;
    background: white;
    border: 3px double var(--green);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.header {
    background: var(--green);
    color: white;
    padding: var(--padding);
    text-align: center;
    font-size: 18px;
}

.num-list {
    text-align: center;
    font-weight: bold;
    padding: 10px;
    color: var(--green);
    border-bottom: 1px solid var(--border);
}

table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background: var(--dark-green);
    color: white;
    padding: 12px;
}

td {
    border: 1px solid var(--border);
    padding: 12px;
    text-align: center;
}

tr:hover {
    background: #f1f9f4;
}

.return-btn {
    display: block;
    width: fit-content;
    margin: 15px auto;
    padding: 10px 15px;
    background: var(--green);
    color: white;
    text-decoration: none;
    border-radius: 8px;
    transition: 0.2s;
}

.return-btn:hover {
    background: var(--dark-green);
}
</style>

</head>

<body>

<div class="container">

    <div class="header">
        PHP ARRAY OPERATIONS
    </div>

    <div class="num-list">
        Array: <?= implode(", ", $numbers) ?>
    </div>

    <table>
        <tr>
            <th>Operation</th>
            <th>Result</th>
        </tr>

        <tr>
            <td>Addition</td>
            <td><?= $sum ?></td>
        </tr>

        <tr>
            <td>Subtraction</td>
            <td><?= $diff ?></td>
        </tr>

        <tr>
            <td>Multiplication</td>
            <td><?= $product ?></td>
        </tr>

        <tr>
            <td>Division</td>
            <td><?= $quotient ?></td>
        </tr>
    </table>

    <a class="return-btn" href="index.php">Return to Main Menu</a>

</div>

</body>
</html>