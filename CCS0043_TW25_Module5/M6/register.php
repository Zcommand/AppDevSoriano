<?php
require('db.php');

$title = "Student Registration";
$message = "";
$type = "";

// Fetch all data from the form
// Check if the form has submitted and the method of submission is POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $year_level = (int)mysqli_real_escape_string($conn, $_POST['year_level']);

    $sql = "INSERT INTO tblstudents
        (student_id, first_name, last_name, email, course, year_level)
        VALUES (
            '$student_id',
            '$first_name',
            '$last_name',
            '$email',
            '$course',
            $year_level
        )";

    if(mysqli_query($conn, $sql)) {
        $message = "Registration completed successfully...";
        $type = "success";
    } else {
        $message = "Registration error: " . mysqli_error($conn);
        $type = "danger";
    }
}

?>