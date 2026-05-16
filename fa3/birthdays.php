<?php
$pageTitle = "Array Sorting Activity - Database View";


$celebrants = [
    [
        "name" => "Wade",
        "age" => 21,
        "birthday" => "2003-01-12",
        "contact" => "09123456781",
        "image" => "https://i.pinimg.com/webp85/736x/89/e2/fc/89e2fc1be17c856183c0bd39c4e0073e.webp"
    ],

    [
        "name" => "Steve",
        "age" => 22,
        "birthday" => "2002-03-05",
        "contact" => "09123456782",
        "image" => "https://i.pinimg.com/236x/f5/a9/90/f5a990100b03b8789d1676f12eb34ffe.jpg"
    ],

    [
        "name" => "Vision",
        "age" => 20,
        "birthday" => "2004-07-19",
        "contact" => "09123456783",
        "image" => "https://i.pinimg.com/736x/60/55/52/6055522a2690c32f97447224e078fb0b.jpg"
    ],

    [
        "name" => "Peter",
        "age" => 23,
        "birthday" => "2001-11-02",
        "contact" => "09123456784",
        "image" => "https://i.pinimg.com/236x/99/25/07/9925074c209dd7f1e32c5ac293d95641.jpg"
    ],

    [
        "name" => "T'chala",
        "age" => 19,
        "birthday" => "2005-09-10",
        "contact" => "09123456785",
        "image" => "https://i.pinimg.com/236x/fc/eb/0b/fceb0b7c1c96de30cb2826a9e97acd5b.jpg"
    ],

    [
        "name" => "Tony",
        "age" => 24,
        "birthday" => "2000-06-25",
        "contact" => "09123456786",
        "image" => "https://i.pinimg.com/736x/25/b8/79/25b879cb14eba0a2ba2dbe9cdfa00031.jpg"
    ],

    [
        "name" => "Natasha",
        "age" => 21,
        "birthday" => "2003-12-01",
        "contact" => "09123456787",
        "image" => "https://i.pinimg.com/736x/ec/65/a5/ec65a5ecf1b0a38154f78325aed3d349.jpg"
    ],

    [
        "name" => "Sam",
        "age" => 22,
        "birthday" => "2002-08-14",
        "contact" => "09123456788",
        "image" => "https://i.pinimg.com/736x/1c/71/bb/1c71bbb0cf0fa96076a5ce6738ffb403.jpg"
    ],

    [
        "name" => "Clint",
        "age" => 20,
        "birthday" => "2004-02-28",
        "contact" => "09123456789",
        "image" => "https://i.pinimg.com/736x/55/25/88/552588631749c397df607fbefb4fbca8.jpg"
    ],

    [
        "name" => "Thor",
        "age" => 23,
        "birthday" => "2001-05-30",
        "contact" => "09123456780",
        "image" => "https://i.pinimg.com/736x/64/42/f5/6442f5518e55ccdc3838520cbd3be0d1.jpg"
    ]
];


usort($celebrants, fn($a, $b) => strcmp($a["name"], $b["name"]));
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
    padding: 10px;
    text-align: center;
}

tr:hover {
    background: #f1f9f4;
}

img {
    width: 80px;
    height: 80px;
    object-fit: cover;
}

.no {
    font-weight: bold;
    color: var(--green);
}
</style>

</head>

<body>

    <div class="container">

        <div class="header">
            MARVEL CELEBRANTS
        </div>

        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Age</th>
                <th>Birthday</th>
                <th>Contact</th>
            </tr>

            <?php $no = 1; ?>
            <?php foreach ($celebrants as $p): ?>
                <tr>
                    <td class="no"><?= $no++ ?></td>
                    <td><?= ucwords($p["name"]) ?></td>
                    <td><img src="<?= $p["image"] ?>" alt="<?= $p["name"] ?>"></td>
                    <td><?= $p["age"] ?></td>
                    <td><?= $p["birthday"] ?></td>
                    <td><?= $p["contact"] ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

        <a class="return-btn" href="index.php">Return to Main Menu</a>

    </div>

</body>

</html>