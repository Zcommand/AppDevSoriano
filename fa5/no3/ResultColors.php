<?php
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
        .header {
            background: #0d6efd;
            color: white;
            text-align: center;
            padding: 10px;
            font-weight: 600;
        }

        .box {
            background: #f8f9fa;
            border-left: 4px solid #0d6efd;
            padding: 12px;
            border-radius: 6px;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container py-4">

        <div class="card shadow mx-auto" style="max-width: 500px;">

            <div class="header">
                My Favorite Colors
            </div>

            <div class="card-body">

                <div class="box">

                    <b>COOKIE OUTPUT (Countdown)</b><br><br>

                    Color 1 (10s): <?= $colors['color1'] ?? 'Expired' ?><br>
                    Color 2 (20s): <?= $colors['color2'] ?? 'Expired' ?><br>
                    Color 3 (30s): <?= $colors['color3'] ?? 'Expired' ?><br>
                    Color 4 (40s): <?= $colors['color4'] ?? 'Expired' ?><br>
                    Color 5 (50s): <?= $colors['color5'] ?? 'Expired' ?>

                </div>

                <a href="FavoriteColor.php" class="btn btn-primary w-100 mt-3">
                    Back
                </a>

            </div>

        </div>

    </div>

</body>

</html>