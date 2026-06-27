<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

$title = "Login";

$message = $_SESSION["message"] ?? "";
$type = $_SESSION["type"] ?? "";
$saved_username = $_COOKIE["remember_username"] ?? "";
$saved_password = $_COOKIE["remember_password"] ?? "";

unset($_SESSION["message"]);
unset($_SESSION["type"]);
?>

<?php require("include/header.php"); ?>

<div class="d-flex justify-content-center">
    <div class="col-md-6">

        <h3 class="text-primary mb-3">Log-In Form</h3>

        <?php if ($message): ?>
            <div class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endif; ?>

        <div class="card shadow-sm">
            <div class="card-body">

                <form method="post" action="process_login.php">

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" value="<?= $saved_username; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" value="<?= $saved_password; ?>" required>
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember" <?= $saved_username ? "checked" : ""; ?>>
                        <label for="remember" class="form-check-label">Remember Me</label>
                    </div>

                    <div class="button-row">
                        <button type="submit" name="submit" class="btn btn-primary">
                            Login
                        </button>

                        <a href="register.php" class="btn btn-secondary">
                            Register
                        </a>

                        <a href="index.php" class="btn btn-secondary">
                            Back
                        </a>
                    </div>

                </form>

                <div class="text-center mt-3 small-text">
                    &copy; John Ronen Soriano
                </div>

            </div>
        </div>

    </div>
</div>

<?php require("include/footer.php"); ?>
