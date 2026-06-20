<?php

if(isset($_POST['submit']))
{
    setcookie("color1", $_POST['color1'], time()+10);
    setcookie("color2", $_POST['color2'], time()+20);
    setcookie("color3", $_POST['color3'], time()+30);
    setcookie("color4", $_POST['color4'], time()+40);
    setcookie("color5", $_POST['color5'], time()+50);
}

$colors = $_POST ?: $_COOKIE;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Colors</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container vh-100 d-flex justify-content-center align-items-center">

    <div class="card shadow-lg" style="width:500px;">
        <div class="card-body">

            <h2 class="text-center mb-4">My Favorite Colors</h2>

            <?php if(isset($colors['color1'])): ?>
                <h4 style="color: <?= $colors['color1'] ?>">
                    Favorite Color 1: <?= $colors['color1'] ?>
                </h4>
            <?php endif; ?>

            <?php if(isset($colors['color2'])): ?>
                <h4 style="color: <?= $colors['color2'] ?>">
                    Favorite Color 2: <?= $colors['color2'] ?>
                </h4>
            <?php endif; ?>

            <?php if(isset($colors['color3'])): ?>
                <h4 style="color: <?= $colors['color3'] ?>">
                    Favorite Color 3: <?= $colors['color3'] ?>
                </h4>
            <?php endif; ?>

            <?php if(isset($colors['color4'])): ?>
                <h4 style="color: <?= $colors['color4'] ?>">
                    Favorite Color 4: <?= $colors['color4'] ?>
                </h4>
            <?php endif; ?>

            <?php if(isset($colors['color5'])): ?>
                <h4 style="color: <?= $colors['color5'] ?>">
                    Favorite Color 5: <?= $colors['color5'] ?>
                </h4>
            <?php endif; ?>

            <div class="mt-4">
                <a href="FavoriteColor.php" class="btn btn-secondary w-100">
                    Back
                </a>
            </div>

        </div>
    </div>

</div>

</body>
</html>