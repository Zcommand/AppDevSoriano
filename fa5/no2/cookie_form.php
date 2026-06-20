<?php
$pageTitle = "Cookie Activity - Personal Information";

if (isset($_POST['submit'])) {

    setcookie("firstname", $_POST['firstname'], time() + 10);
    setcookie("middlename", $_POST['middlename'], time() + 20);
    setcookie("lastname", $_POST['lastname'], time() + 30);

    header("Location: cookie_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $pageTitle ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .form-header {
        background: #0d6efd;
        color: white;
        padding: 12px 16px;
        font-weight: 600;
        border-radius: 8px 8px 0 0;
    }

    .result-box {
        background: #f8f9fa;
        border-left: 4px solid #0d6efd;
        border-right: 4px solid #0d6efd;
        padding: 12px;
        border-radius: 6px;
    }

    .section-title {
        font-size: 13px;
        font-weight: 600;
        color: #0d6efd;
        margin: 10px 0;
    }
</style>

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="card shadow-lg">

        <!-- HEADER -->
        <div class="form-header">
            Personal Information System (COOKIE METHOD)
        </div>

        <div class="p-4">

            
            <form method="post">

                <div class="section-title">Full Name</div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <input type="text" name="firstname" class="form-control" placeholder="First Name">
                    </div>

                    <div class="col-md-4">
                        <input type="text" name="middlename" class="form-control" placeholder="Middle Name">
                    </div>

                    <div class="col-md-4">
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary w-100">
                    Save Cookies
                </button>

            </form>

            <hr>

           
            <div class="result-box">

                <h6 class="text-primary mb-3">Cookie Output</h6>

                <p><b>First Name (10s):</b>
                    <?= $_COOKIE['firstname'] ?? 'Not set yet / expired' ?>
                </p>

                <p><b>Middle Name (20s):</b>
                    <?= $_COOKIE['middlename'] ?? 'Not set yet / expired' ?>
                </p>

                <p><b>Last Name (30s):</b>
                    <?= $_COOKIE['lastname'] ?? 'Not set yet / expired' ?>
                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>