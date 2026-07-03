<?php
require('db.php');
require('mailer.php');

/**
 * @var mysqli $conn Database connection
 */

$title = "Student Registration";
$message = "";
$type = "";

// Fetch all data from the form
// Check if the form has submitted and the method of submission is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $year_level = (int)mysqli_real_escape_string($conn, $_POST['year_level']);

    $photo = NULL;

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
        $allowed = ["image/jpeg", "image/jpg", "image/png", "image/gif",];
        $file_type = $_FILES['photo']['type'];
        $max_size = 2 * 1024 * 1024; // 2MB
        $file_size = $_FILES['photo']['size'];

        if (!in_array($file_type, $allowed)) {
            $message = "Only image files are accepted.";
            $type = "danger";
        } elseif ($file_size > $max_size) {
            $message = "File must be 2MB or lower only.";
            $type = "danger";
        } else {
            $upload_dir = "uploads/";
            if(!is_dir($upload_dir)) mkdir($upload_dir, 0755, true);
            
                $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                $filename = $student_id . "-" . time() . "." . $ext;
                $destination = $upload_dir . $filename;

                if(move_uploaded_file($_FILES['photo']['tmp_name'], $destination)) {
                    $photo = $filename;
                } else {
                    $message = "Failed to upload photo.";
                    $type = "danger";
                }
        }
    }

    // Generate random token
    $token = bin2hex(random_bytes(32));

    $sql = "INSERT INTO tblstudents
        (student_id, first_name, last_name, email, course, year_level, photo, confirm_token)
        VALUES (
            '$student_id',
            '$first_name',
            '$last_name',
            '$email',
            '$course',
            $year_level,
            '$photo',
            '$token'
        )";

    if (mysqli_query($conn, $sql)) {
        try{
            send_confirmation($email, $first_name . " " . $last_name, $token);
            $message = "Registration completed successfully...";
            $type = "success";
        } catch (Exception $e) {
            $message = "Registration completed but confirmation email failed to send: " . $e->getMessage();
            $type = "warning";
        }
    } else {
        $message = "Registration error: " . mysqli_error($conn);
        $type = "danger";
    }
}
