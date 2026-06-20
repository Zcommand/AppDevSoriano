<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Favorite Colors</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .form-header {
        background: #0d6efd;
        color: white;
        padding: 10px 14px;
        font-weight: 600;
        border-radius: 6px 6px 0 0;
    }

    .card {
        border-radius: 8px;
    }
</style>
</head>

<body class="bg-light">

<div class="container py-4">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow-sm">

                <div class="form-header text-center">
                    Favorite Colors
                </div>

                <div class="card-body">

                    <form action="ResultColors.php" method="post">

                        <input type="text" name="color1" class="form-control mb-2" placeholder="Favorite Color 1">
                        <input type="text" name="color2" class="form-control mb-2" placeholder="Favorite Color 2">
                        <input type="text" name="color3" class="form-control mb-2" placeholder="Favorite Color 3">
                        <input type="text" name="color4" class="form-control mb-2" placeholder="Favorite Color 4">
                        <input type="text" name="color5" class="form-control mb-3" placeholder="Favorite Color 5">

                        <button type="submit" name="submit" class="btn btn-primary w-100">
                            Send Colors
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>