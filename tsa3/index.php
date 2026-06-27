<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

$title = "TSA 3";
?>

<?php require("include/header.php"); ?>

<div class="text-center py-4">

    <h3 class="text-primary mb-3">User Authentication System</h3>

    <p class="small-text mb-4">
        Registration, login, sessions, cookies, user retrieval, and password reset.
    </p>

    <div class="d-flex justify-content-center gap-2">
        <a href="login.php" class="btn btn-primary">
            Login
        </a>

        <a href="register.php" class="btn btn-secondary">
            Register
        </a>
    </div>

</div>

<?php require("include/footer.php"); ?>
