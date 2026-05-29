<?php
$pageTitle = "Array Sorting Activity - My Fruits";

$fruits = [
    [
        "name" => "Apple",
        "description" => "A sweet and crunchy fruit commonly eaten fresh or used in desserts.",
        "facts" => "Apples float in water because they are 25% air.",
        "image" => "https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6"
    ],
    [
        "name" => "Banana",
        "description" => "A soft, sweet fruit rich in potassium.",
        "facts" => "Bananas are berries, but strawberries are not.",
        "image" => "https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e"
    ],
    [
        "name" => "Cherry",
        "description" => "A small red fruit with a sweet and sour taste.",
        "facts" => "Cherries belong to the same family as roses.",
        "image" => "https://images.unsplash.com/photo-1528825871115-3581a5387919"
    ],
    [
        "name" => "Dragon Fruit",
        "description" => "A tropical fruit with a unique appearance and mild sweetness.",
        "facts" => "It is also called pitaya.",
        "image" => "https://images.unsplash.com/photo-1601004890684-d8cbf643f5f2"
    ],
    [
        "name" => "Grapes",
        "description" => "Small juicy fruits used for eating and wine production.",
        "facts" => "Grapes grow in clusters called bunches.",
        "image" => "https://images.unsplash.com/photo-1537640538966-79f369143f8f"
    ],
    [
        "name" => "Mango",
        "description" => "The national fruit of the Philippines, sweet and juicy. My fav btw",
        "facts" => "Mango trees can live for over 100 years.",
        "image" => "https://images.unsplash.com/photo-1553279768-865429fa0078"
    ],
    [
        "name" => "Orange",
        "description" => "A citrus fruit rich in vitamin C.",
        "facts" => "Oranges are hybrids of pomelo and mandarin.",
        "image" => "https://images.unsplash.com/photo-1547514701-42782101795e"
    ],
    [
        "name" => "Pineapple",
        "description" => "A tropical fruit with a spiky exterior and sweet taste.",
        "facts" => "Pineapples take about 2 years to grow.",
        "image" => "https://images.unsplash.com/photo-1550258987-190a2d41a8ba"
    ],
    [
        "name" => "Strawberry",
        "description" => "A red heart-shaped fruit with a sweet flavor.",
        "facts" => "Each strawberry has around 200 seeds.",
        "image" => "https://images.unsplash.com/photo-1464965911861-746a04b4bca6"
    ],
    [
        "name" => "Watermelon",
        "description" => "A large fruit with high water content and refreshing taste.",
        "facts" => "Watermelons are 92% water.",
        "image" => "https://images.unsplash.com/photo-1563114773-84221bd62daa"
    ]
];

usort($fruits, fn($a, $b) => strcmp($a["name"], $b["name"]));
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
            My Fruits
        </div>

        <table>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Facts</th>
            </tr>

            <?php foreach ($fruits as $p): ?>
                <tr>
                    <td><img src="<?= $p["image"] ?>" alt="<?= $p["name"] ?>"></td>
                    <td><?= ucwords($p["name"]) ?></td>
                    <td><?= $p["description"] ?></td>
                    <td><?= $p["facts"] ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

        <a class="return-btn" href="index.php">Return to Main Menu</a>

    </div>

</body>

</html>