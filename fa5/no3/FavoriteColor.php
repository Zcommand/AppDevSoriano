<?php
session_start();

if (isset($_POST['submit'])) {

    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];

    setcookie("color1", $_POST['color1'], time() + 10);
    setcookie("color2", $_POST['color2'], time() + 20);
    setcookie("color3", $_POST['color3'], time() + 30);
    setcookie("color4", $_POST['color4'], time() + 40);
    setcookie("color5", $_POST['color5'], time() + 50);

    header("Location: ResultColors.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Colors</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .header {
            background: #0d6efd;
            color: white;
            text-align: center;
            padding: 10px;
            font-weight: 600;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container py-4">

        <div class="card shadow mx-auto" style="max-width: 500px;">

            <div class="header">
                Enter Your Favorite Colors
            </div>

            <div class="card-body">

                <form method="post">

                    <input type="text" name="color1" class="form-control mb-2" placeholder="Color 1">
                    <input type="text" name="color2" class="form-control mb-2" placeholder="Color 2">
                    <input type="text" name="color3" class="form-control mb-2" placeholder="Color 3">
                    <input type="text" name="color4" class="form-control mb-2" placeholder="Color 4">
                    <input type="text" name="color5" class="form-control mb-3" placeholder="Color 5">

                    <button type="submit" name="submit" class="btn btn-primary w-100">
                        Send Colors
                    </button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>