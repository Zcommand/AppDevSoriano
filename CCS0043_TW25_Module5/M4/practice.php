<?php
$pageTitle = "Home";

$books = [
    [
        "title" => "spiderman",
        "author" => "Marvel",
        "year" => "2026",
        "image" => ""
    ],
    [
        "title" => "spiderman",
        "author" => "Marvel",
        "year" => "2026",
        "image" => ""
    ],
    [
        "title" => "spiderman",
        "author" => "Marvel",
        "year" => "2026",
        "image" => ""
    ]
];

usort($books, fn($a, $b) => strcmp($a["title"], $b["title"]));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <style>

        .container{
            color:red
        }

    </style>
</head>

<body>
    <div class = "container">

        <div class = "header">
            My books
        </div>

        <table>
            <tr>
                <th>title</th>
                <th>author</th>
                <th>year</th>
                <th>image</th>
            </tr>
        
        
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $book["title"]?></td>
                <td><?= $book["author"]?></td>
                <td><?= $book["year"]?></td>
                <td><?= $book["image"]?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
</body>

</html>