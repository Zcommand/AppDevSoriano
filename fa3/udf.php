<?php
$pageTitle = "Function Operations (User Defined)";

function operations($num1, $num2, $num3)
{
    $sum = $num1 + $num2 + $num3;
    $diff = $num1 - $num2 - $num3;
    $product = $num1 * $num2 * $num3;

    if ($num2 != 0 && $num3 != 0) {
        $quotient = $num1 / $num2 / $num3;
    } else {
        $quotient = "Undefined";
    }

    return [
        "sum" => $sum,
        "difference" => $diff,
        "product" => $product,
        "quotient" => $quotient
    ];
}

$result = operations(10, 2, 5);
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
    max-width: 900px;
    margin: auto;
    background: white;
    border: 3px double var(--green);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.header {
    background: var(--green);
    color: white;
    padding: var(--padding);
    text-align: center;
}

.sub {
    text-align: center;
    padding: 10px;
    color: #555;
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
    border-radius: var(--radius);
}

.return-btn:hover {
    background: var(--dark-green);
}
</style>

</head>

<body>

<div class="container">

    <div class="header">
        PHP FUNCTION OPERATIONS
    </div>

    <div class="sub">
        Parameters used: 10, 2, 5
    </div>

    <table>
        <tr>
            <th>Operation</th>
            <th>Result</th>
        </tr>

        <tr>
            <td>Sum</td>
            <td><?= $result["sum"] ?></td>
        </tr>

        <tr>
            <td>Difference</td>
            <td><?= $result["difference"] ?></td>
        </tr>

        <tr>
            <td>Product</td>
            <td><?= $result["product"] ?></td>
        </tr>

        <tr>
            <td>Quotient</td>
            <td><?= $result["quotient"] ?></td>
        </tr>
    </table>

    <a class="return-btn" href="index.php">Return to Main Menu</a>

</div>

</body>
</html>