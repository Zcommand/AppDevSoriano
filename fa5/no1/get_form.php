<?php $pageTitle = "GET Form - Personal Information"; ?>

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
        border-right: 4px solid #0d6efd;
        border-left: 4px solid #0d6efd;
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

        <div class="form-header">
            Personal Information System (GET METHOD)
        </div>

        <div class="p-4">

            <form method="get" action="<?= $_SERVER['PHP_SELF']; ?>">

                <!-- NAME -->
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

                <!-- PERSONAL DETAILS -->
                <div class="section-title">Personal Details</div>

                <div class="row mb-3">

                    <div class="col-md-4">
                        <select name="gender" class="form-control">
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <input type="date" name="dob" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                    </div>

                </div>

                <!-- CONTACT -->
                <div class="section-title">Contact Information</div>

                <div class="mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email Address">
                </div>

                <div class="mb-3">
                    <input type="text" name="address" class="form-control" placeholder="Complete Address">
                </div>

                <button type="submit" name="submit" class="btn btn-primary w-100">
                    Submit Information
                </button>

            </form>

            <?php if (isset($_GET['submit'])): ?>

                <hr>

                <div class="result-box">

                    <h6 class="text-primary mb-3">Submitted Data</h6>

                    <p><b>First Name:</b> <?= $_GET['firstname'] ?></p>
                    <p><b>Middle Name:</b> <?= $_GET['middlename'] ?></p>
                    <p><b>Last Name:</b> <?= $_GET['lastname'] ?></p>
                    <p><b>Gender:</b> <?= $_GET['gender'] ?></p>
                    <p><b>Date of Birth:</b> <?= $_GET['dob'] ?></p>
                    <p><b>Phone:</b> <?= $_GET['phone'] ?></p>
                    <p><b>Email:</b> <?= $_GET['email'] ?></p>
                    <p><b>Address:</b> <?= $_GET['address'] ?></p>

                </div>

            <?php endif; ?>

        </div>

    </div>

</div>

</body>
</html>