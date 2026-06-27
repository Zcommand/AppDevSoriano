<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION["user_id"])) {
    $_SESSION["message"] = "Password reset is available only for MySQL registered accounts.";
    $_SESSION["type"] = "warning";

    header("Location: home.php");
    exit();
}

require("db.php");

if (isset($_POST["submit"])) {
    $user_id = $_SESSION["user_id"];
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_new_password = $_POST["confirm_new_password"];

    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($current_password != $row["password"]) {
        $_SESSION["message"] = "Current password is not the same with the old password";
        $_SESSION["type"] = "danger";
    } elseif ($new_password != $confirm_new_password) {
        $_SESSION["message"] = "New password and Re-Enter new password should be the same.";
        $_SESSION["type"] = "danger";
    } else {
        $update_sql = "UPDATE users SET password = '$new_password' WHERE id = $user_id";

        if (mysqli_query($conn, $update_sql)) {
            $_SESSION["message"] = "Password updated successfully.";
            $_SESSION["type"] = "success";
        } else {
            $_SESSION["message"] = "Error: " . mysqli_error($conn);
            $_SESSION["type"] = "danger";
        }
    }
}

mysqli_close($conn);

header("Location: home.php");
exit();
?>
