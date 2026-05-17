<?php
$pageTitle = "String Functions Activity";

$names = [
    "tony stark", "steve rogers", "bruce banner", "natasha romanoff", "clint barton",
    "peter parker", "wanda maximoff", "pietro maximoff", "sam wilson", "bucky barnes",
    "thor odinson", "loki laufeyson", "shuri udaku", "tchalla wakanda", "nick fury",
    "phil coulson", "stephen strange", "carol danvers", "vision synthezoid", "scott lang"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $pageTitle ?></title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f2f6f3;
    padding: 20px;
}

.container {
    width: 95%;
    max-width: 1100px;
    margin: auto;
    background: white;
    border: 3px double #006b3c;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.header {
    background: #006b3c;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 18px;
    font-weight: bold;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background: #004d2a;
    color: white;
    padding: 10px;
}

td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

tr:hover {
    background: #f1f9f4;
}
</style>

</head>

<body>

<div class="container">

<div class="header">
    STRING FUNCTION OUTPUT (20 NAMES)
</div>

<table>
<tr>
    <th>Name</th>
    <th>Length</th>
    <th>Uppercase First Letter</th>
    <th>Vowels → @</th>
    <th>Position of "a"</th>
    <th>Reversed</th>
</tr>

<?php foreach ($names as $n): ?>
<tr>
    <td><?= $n ?></td>
    <td><?= strlen($n) ?></td>
    <td><?= ucwords($n) ?></td>
    <td><?= str_replace(["a","e","i","o","u"], "@", $n) ?></td>
    <td><?= strpos($n, "a") !== false ? strpos($n, "a") : "Not Found" ?></td>
    <td><?= strrev($n) ?></td>
</tr>
<?php endforeach; ?>

</table>

</div>

</body>
</html>