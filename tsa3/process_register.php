<?php
session_start();
require("db.php");

if (isset($_POST["submit"])) {
    $firstname = $_REQUEST["firstname"];
    $middlename = $_REQUEST["middlename"];
    $lastname = $_REQUEST["lastname"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $confirm_password = $_REQUEST["confirm_password"];
    $birthday = $_REQUEST["birthday"];
    $email = $_REQUEST["email"];
    $contact_number = $_REQUEST["contact_number"];

    if ($password != $confirm_password) {
        $_SESSION["message"] = "password and confirm password are not the same";
        $_SESSION["type"] = "danger";

        header("Location: register.php");
        exit();
    }

    $check_sql = "SELECT * FROM users WHERE username = '$username'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        $_SESSION["message"] = "Username already exists.";
        $_SESSION["type"] = "danger";

        header("Location: register.php");
        exit();
    }

    $sql = "INSERT INTO users
        (firstname, middlename, lastname, username, password, birthday, email, contact_number)
        VALUES
        (
            '$firstname',
            '$middlename',
            '$lastname',
            '$username',
            '$password',
            '$birthday',
            '$email',
            '$contact_number'
        )";

    if (mysqli_query($conn, $sql)) {
        $_SESSION["message"] = "Account registered successfully.";
        $_SESSION["type"] = "success";
        $_SESSION["registered_firstname"] = $firstname;
        $_SESSION["registered_middlename"] = $middlename;
        $_SESSION["registered_lastname"] = $lastname;
        $_SESSION["registered_username"] = $username;
        $_SESSION["registered_password"] = $password;
        $_SESSION["registered_birthday"] = $birthday;
        $_SESSION["registered_email"] = $email;
        $_SESSION["registered_contact"] = $contact_number;
    } else {
        $_SESSION["message"] = "Error: " . mysqli_error($conn);
        $_SESSION["type"] = "danger";
    }
}

mysqli_close($conn);

header("Location: register.php");
exit();
?>
