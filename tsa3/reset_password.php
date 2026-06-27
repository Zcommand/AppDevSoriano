<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$title = "Reset Password";

$message = $_SESSION["message"] ?? "";
$type = $_SESSION["type"] ?? "";

unset($_SESSION["message"]);
unset($_SESSION["type"]);
?>

<?php require("include/header.php"); ?>

<div class="d-flex justify-content-center">
    <div class="col-md-6">

        <h3 class="text-primary mb-3">Reset Password</h3>

        <?php if ($message): ?>
            <div class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endif; ?>

        <?php if (!isset($_SESSION["user_id"])): ?>

            <div class="alert alert-warning">
                Password reset is available only for MySQL registered accounts.
            </div>

            <a href="home.php" class="btn btn-secondary">
                Back to Home
            </a>

        <?php else: ?>

            <div class="card shadow-sm">
                <div class="card-body">

                    <form method="post" action="process_reset.php">

                        <div class="mb-3">
                            <label class="form-label">Current Password</label>
                            <input type="password" name="current_password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" name="new_password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm New Password</label>
                            <input type="password" name="confirm_new_password" class="form-control" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" name="submit" class="btn btn-primary">
                                Update Password
                            </button>

                            <a href="home.php" class="btn btn-secondary">
                                Back
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        <?php endif; ?>

    </div>
</div>

<?php require("include/footer.php"); ?>
