<?php

if (isset($_POST['submit'])) {

    setcookie("color1", $_POST['color1'], time() + 10);
    setcookie("color2", $_POST['color2'], time() + 20);
    setcookie("color3", $_POST['color3'], time() + 30);
    setcookie("color4", $_POST['color4'], time() + 40);
    setcookie("color5", $_POST['color5'], time() + 50);

    header("Location: ResultColors.php");
    exit();
}

$colors = $_COOKIE;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Result Colors</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .form-header {
        background: #0d6efd;
        color: white;
        padding: 10px;
        text-align: center;
        font-weight: 600;
        border-radius: 6px 6px 0 0;
    }
</style>

</head>

<body class="bg-light">

<div class="container py-4">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="form-header">
                    My Favorite Colors
                </div>

                <div class="card-body">

                    <input class="form-control mb-2"
                        value="<?= $colors['color1'] ?? '' ?>"
                        style="color: <?= $colors['color1'] ?? '' ?>"
                        disabled>

                    <input class="form-control mb-2"
                        value="<?= $colors['color2'] ?? '' ?>"
                        style="color: <?= $colors['color2'] ?? '' ?>"
                        disabled>

                    <input class="form-control mb-2"
                        value="<?= $colors['color3'] ?? '' ?>"
                        style="color: <?= $colors['color3'] ?? '' ?>"
                        disabled>

                    <input class="form-control mb-2"
                        value="<?= $colors['color4'] ?? '' ?>"
                        style="color: <?= $colors['color4'] ?? '' ?>"
                        disabled>

                    <input class="form-control mb-3"
                        value="<?= $colors['color5'] ?? '' ?>"
                        style="color: <?= $colors['color5'] ?? '' ?>"
                        disabled>

                    <a href="FavoriteColor.php" class="btn btn-primary w-100">
                        Back
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>