<?php
session_start();
require("db.php");

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $static_username = "admin";
    $static_password = "12345";

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if ($password == $row["password"]) {
            if (isset($_POST["remember"])) {
                setcookie("remember_username", $username, time() + 86400);
                setcookie("remember_password", $password, time() + 86400);
            } else {
                setcookie("remember_username", "", time() - 3600);
                setcookie("remember_password", "", time() - 3600);
            }

            $_SESSION["user_id"] = $row["id"];
            $_SESSION["firstname"] = $row["firstname"];
            $_SESSION["middlename"] = $row["middlename"];
            $_SESSION["lastname"] = $row["lastname"];
            $_SESSION["fullname"] = $row["firstname"] . " " . $row["middlename"] . " " . $row["lastname"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["birthday"] = $row["birthday"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["contact_number"] = $row["contact_number"];

            header("Location: home.php");
            exit();
        } else {
            $_SESSION["message"] = "Invalid password.";
            $_SESSION["type"] = "danger";
        }
    } elseif ($username == $static_username && $password == $static_password) {
        if (isset($_POST["remember"])) {
            setcookie("remember_username", $username, time() + 86400);
            setcookie("remember_password", $password, time() + 86400);
        } else {
            setcookie("remember_username", "", time() - 3600);
            setcookie("remember_password", "", time() - 3600);
        }

        $_SESSION["fullname"] = "Administrator";
        $_SESSION["username"] = $username;
        $_SESSION["birthday"] = "N/A";
        $_SESSION["email"] = "N/A";
        $_SESSION["contact_number"] = "N/A";

        header("Location: home.php");
        exit();
    } else {
        $_SESSION["message"] = "Username not found.";
        $_SESSION["type"] = "danger";
    }
}

mysqli_close($conn);

header("Location: login.php");
exit();
?>
