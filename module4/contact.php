<?php
$pageTitle = "Page Title Here";
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
        PAGE HEADER TITLE
    </div>

    <!-- CONTENT START -->

    

    <!-- CONTENT END -->

    <a class="return-btn" href="index.php">Return</a>

</div>

</body>
</html>

<?php

$data = [
    [
        "name" => "Item 1",
        "desc" => "Description here",
        "image" => "image.jpg"
    ],
    [
        "name" => "Item 2",
        "desc" => "Description here",
        "image" => "image.jpg"
    ]
];

usort($data, fn($a, $b) => strcmp($a["name"], $b["name"]));

?>

<table>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
    </tr>

    <?php foreach ($data as $item): ?>
    <tr>
        <td><img src="<?= $item["image"] ?>"></td>
        <td><?= $item["name"] ?></td>
        <td><?= $item["desc"] ?></td>
    </tr>
    <?php endforeach; ?>

</table>

<?php

function compute($a, $b, $c)
{
    $result1 = $a + $b + $c;
    $result2 = $a * $b * $c;

    return [
        "sum" => $result1,
        "product" => $result2
    ];
}

$result = compute(3, 4, 5);

?>

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
        <td>Product</td>
        <td><?= $result["product"] ?></td>
    </tr>
</table>

<div class="resume-container">

    <div class="top-section">

        <div class="profile">
            <img src="image.jpg">
        </div>

        <div class="personal-info">
            <a href="personal.php">Personal Information</a>
        </div>

    </div>

    <div class="sections">

        <a class="section" href="career.php">Career Objective</a>
        <a class="section" href="education.php">Education</a>
        <a class="section" href="skills.php">Skills</a>
        <a class="section" href="affiliation.php">Affiliation</a>
        <a class="section" href="experience.php">Experience</a>

    </div>

</div>

echo strlen("text");
echo str_word_count("text");
echo strrev("text");
echo strpos("text", "t");
echo str_replace("a", "@", "banana");

.container {
    width: 90%;
    margin: auto;
}

.header {
    background: green;
    color: white;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background: darkgreen;
    color: white;
}

td {
    border: 1px solid #ddd;
    text-align: center;
}