<?php
require("db.php");

/**
 * @var mysqli $conn Database connection
 */

$title = "Confirm Registration";
$message = "";
$type = "";

if (isset($_GET['token']) && !empty($_GET['token'])) {
    $token = mysqli_real_escape_string($conn, $_GET['token']);

    $sql = "SELECT * FROM tblstudents WHERE confirm_token = '$token'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $student = mysqli_fetch_assoc(($result));

        if ($student['is_confirmed'] == 1) {
            $message = "Your account has already been confirmed.";
            $type = "info";
        } else {
            $sql = "UPDATE tblstudents SET is_confirmed = 1, confirm_token = NULL WHERE confirm_token = '$token'";
            mysqli_query($conn, $sql);
            $message = "You account confirmation is successful.";
            $type = "success";
        }
    } else {
        $message = "Invalid or expired token.";
        $type = "danger";
    }
} else {
    $message = "No token provided.";
    $type = "danger";
}

mysqli_close($conn);

?>

<?php require('include/header.php'); ?>

    <div class="d-flex justify-content-center">
        <div class="col col-md-4">
            <h2>Confirm Registration</h2>
            <?php
            if($message):
            ?>
            <div class="alert alert-<?= $type; ?>" role="alert">
                <?= $message; ?>
            </div>
            <?php
            endif;
            ?>
            <a href="index.php" class="btn btn-secondary">Back to Student List</a>
        </div>
    </div>

<?php require('include/footer.php'); ?>