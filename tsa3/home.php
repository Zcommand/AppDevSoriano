<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$title = "Home";
$message = $_SESSION["message"] ?? "";
$type = $_SESSION["type"] ?? "";

unset($_SESSION["message"]);
unset($_SESSION["type"]);

$fullname = $_SESSION["fullname"] ?? "";
$username = $_SESSION["username"];
$birthday = $_SESSION["birthday"] ?? "";
$email = $_SESSION["email"] ?? "";
$contact_number = $_SESSION["contact_number"] ?? "";

if (isset($_SESSION["user_id"])) {
    require("db.php");

    $user_id = $_SESSION["user_id"];
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $fullname = $row["firstname"] . " " . $row["middlename"] . " " . $row["lastname"];
        $username = $row["username"];
        $birthday = $row["birthday"];
        $email = $row["email"];
        $contact_number = $row["contact_number"];
    }

    mysqli_close($conn);
}
?>

<?php require("include/header.php"); ?>

<div class="d-flex justify-content-center">
    <div class="col-md-8">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="text-primary mb-0">User Information Form</h3>

            <a href="logout.php" class="btn btn-outline-primary btn-sm">
                Log-out
            </a>
        </div>

        <?php if ($message): ?>
            <div class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endif; ?>

        <div class="card shadow-sm">
            <div class="card-body">

                <p><b>Welcome</b> <?= $fullname; ?></p>
                <p><b>Birthday:</b> <?= $birthday; ?></p>

                <h5 class="mb-2">Contact Details</h5>
                <p class="ms-4"><b>Email:</b> <?= $email; ?></p>
                <p class="ms-4"><b>Contact:</b> <?= $contact_number; ?></p>

                <hr>

                <h5 class="text-primary mb-3">RESET PASSWORD</h5>

                <form method="post" action="process_reset.php">

                    <div class="row mb-2">
                        <label class="col-md-4 form-label">Enter Current Password:</label>
                        <div class="col-md-8">
                            <input type="password" name="current_password" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-md-4 form-label">Enter New Password:</label>
                        <div class="col-md-8">
                            <input type="password" name="new_password" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-md-4 form-label">Re-Enter New Password:</label>
                        <div class="col-md-8">
                            <input type="password" name="confirm_new_password" class="form-control" required>
                        </div>
                    </div>

                    <div class="button-row justify-content-center">
                        <button type="submit" name="submit" class="btn btn-primary">
                            Reset Password
                        </button>

                        <a href="view_users.php" class="btn btn-secondary">
                            View Users
                        </a>
                    </div>

                </form>

                <div class="text-center mt-4 small-text">
                    &copy; John Ronen Soriano
                </div>

            </div>
        </div>

    </div>
</div>

<?php require("include/footer.php"); ?>
