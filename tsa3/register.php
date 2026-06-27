<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

$title = "Registration";

$message = $_SESSION["message"] ?? "";
$type = $_SESSION["type"] ?? "";

$registered_firstname = $_SESSION["registered_firstname"] ?? "";
$registered_middlename = $_SESSION["registered_middlename"] ?? "";
$registered_lastname = $_SESSION["registered_lastname"] ?? "";
$registered_username = $_SESSION["registered_username"] ?? "";
$registered_password = $_SESSION["registered_password"] ?? "";
$registered_birthday = $_SESSION["registered_birthday"] ?? "";
$registered_email = $_SESSION["registered_email"] ?? "";
$registered_contact = $_SESSION["registered_contact"] ?? "";

unset($_SESSION["message"]);
unset($_SESSION["type"]);
unset($_SESSION["registered_firstname"]);
unset($_SESSION["registered_middlename"]);
unset($_SESSION["registered_lastname"]);
unset($_SESSION["registered_username"]);
unset($_SESSION["registered_password"]);
unset($_SESSION["registered_birthday"]);
unset($_SESSION["registered_email"]);
unset($_SESSION["registered_contact"]);
?>

<?php require("include/header.php"); ?>

<div class="d-flex justify-content-center">
    <div class="col-md-7">

        <h3 class="text-primary mb-3">My Personal Information</h3>

        <?php if ($message): ?>
            <div class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endif; ?>

        <div class="card shadow-sm mb-4">
            <div class="card-body">

                <form method="post" action="process_register.php">

                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Middle Name</label>
                        <input type="text" name="middlename" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Birthday</label>
                        <input type="text" name="birthday" class="form-control" placeholder="" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Contact Number</label>
                        <input type="text" name="contact_number" class="form-control" required>
                    </div>

                    <div class="button-row">
                        <button type="submit" name="submit" class="btn btn-primary">
                            Submit
                        </button>

                        <a href="login.php" class="btn btn-secondary">
                            Return
                        </a>
                    </div>

                    <div class="text-center mt-3 small-text">
                        &copy; John Ronen Soriano
                    </div>

                </form>

            </div>
        </div>

        <?php if ($registered_username): ?>
            <div class="card shadow-sm">
                <div class="card-body">
                    <p><b>Full Name:</b> <?= $registered_firstname . " " . $registered_middlename . " " . $registered_lastname; ?></p>
                    <p><b>Username:</b> <?= $registered_username; ?></p>
                    <p><b>Password:</b> <?= $registered_password; ?></p>
                    <p><b>Birthday:</b> <?= $registered_birthday; ?></p>
                    <p><b>Email:</b> <?= $registered_email; ?></p>
                    <p><b>Contact Number:</b> <?= $registered_contact; ?></p>

                    <div class="button-row mt-3">
                        <a href="login.php" class="btn btn-primary">
                            Proceed to Login
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php require("include/footer.php"); ?>
