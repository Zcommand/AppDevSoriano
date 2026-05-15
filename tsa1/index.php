<?php

$submitted = false;
$errors = [];

// DEFAULT VALUES
$studentNumber = $entryDate = $entryType = $grade = $oen = $homeroom = "";
$fname = $mname = $lname = $gender = $dob = "";
$previousSchool = $previousGrade = $reasonTransfer = "";
$medical = "";
$birthCountry = $citizenship = "";
$programs = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $submitted = true;

    // SCHOOL USE
    $studentNumber = $_POST["studentNumber"] ?? "";
    $entryDate = $_POST["entryDate"] ?? "";
    $entryType = $_POST["entryType"] ?? "";
    $grade = $_POST["grade"] ?? "";
    $oen = $_POST["oen"] ?? "";
    $homeroom = $_POST["classHomeroom"] ?? "";

    // STUDENT INFO
    $fname = ucwords(strtolower($_POST["firstName"] ?? ""));
    $mname = ucwords(strtolower($_POST["middleName"] ?? ""));
    $lname = ucwords(strtolower($_POST["lastName"] ?? ""));
    $gender = $_POST["gender"] ?? "";
    $dob = $_POST["dob"] ?? "";

    // PREVIOUS SCHOOL
    $previousSchool = ucwords(strtolower($_POST["previousSchool"] ?? ""));
    $previousGrade = $_POST["previousGrade"] ?? "";
    $reasonTransfer = ucfirst(strtolower($_POST["reasonTransfer"] ?? ""));

    // HEALTH
    $medical = ucfirst(strtolower($_POST["medical"] ?? ""));

    // CITIZENSHIP
    $birthCountry = ucwords(strtolower($_POST["birthCountry"] ?? ""));
    $citizenship = ucwords(strtolower($_POST["citizenship"] ?? ""));

    // PROGRAMS
    $programs = $_POST["programs"] ?? [];

    // VALIDATION
    if ($fname == "" || $lname == "" || $gender == "" || $dob == "") {
        $errors[] = "Please fill out required student information.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .req {
            color: red;
            font-weight: bold;
        }
    </style>

</head>

<body>

<h1>Student Registration Form</h1>

<form method="POST">

<!-- SCHOOL USE -->
<div class="section">
    <h3>For School Use</h3>

    Student Number: <input type="text" name="studentNumber"><br>
    Entry Date: <input type="date" name="entryDate"><br>
    Entry Type: <input type="text" name="entryType"><br>
    Grade: <input type="text" name="grade"><br>
    OEN: <input type="text" name="oen"><br>
    Class/Homeroom: <input type="text" name="classHomeroom"><br>

    <br>Programs:<br>
    <label><input type="checkbox" name="programs[]" value="ESL"> ESL</label>
    <label><input type="checkbox" name="programs[]" value="SPED"> SPED</label>
    <label><input type="checkbox" name="programs[]" value="IPRC"> IPRC</label>
    <label><input type="checkbox" name="programs[]" value="ISA"> ISA</label>
</div>

<!-- STUDENT INFO -->
<div class="section">
    <h3>Student Information</h3>

    Last Name <span class="req">*</span>: <input type="text" name="lastName" required><br>
    First Name <span class="req">*</span>: <input type="text" name="firstName" required><br>
    Middle Name: <input type="text" name="middleName"><br>

    Gender <span class="req">*</span>:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female<br>

    Date of Birth <span class="req">*</span>: <input type="date" name="dob" required><br>
</div>

<!-- PREVIOUS SCHOOL -->
<div class="section">
    <h3>Previous School Information</h3>

    Previous School: <input type="text" name="previousSchool"><br>
    Previous Grade: <input type="text" name="previousGrade"><br>
    Reason for Transfer: <input type="text" name="reasonTransfer"><br>
</div>

<!-- HEALTH -->
<div class="section">
    <h3>Health Information</h3>

    Medical Conditions: <input type="text" name="medical"><br>
</div>

<!-- CITIZENSHIP -->
<div class="section">
    <h3>Citizenship Information</h3>

    Birth Country: <input type="text" name="birthCountry"><br>
    Citizenship: <input type="text" name="citizenship"><br>
</div>

<button type="submit">Submit</button>

</form>

<?php if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red; text-align:center;'>$error</p>";
    }
} ?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors)) { ?>

<div class="output">

    <h2>Submitted Information</h2>

    <p><b>Name:</b> <?php echo "$fname $mname $lname"; ?></p>
    <p><b>Gender:</b> <?php echo $gender; ?></p>
    <p><b>Date of Birth:</b> <?php echo $dob; ?></p>

    <p><b>Previous School:</b> <?php echo $previousSchool; ?></p>
    <p><b>Previous Grade:</b> <?php echo $previousGrade; ?></p>
    <p><b>Reason:</b> <?php echo $reasonTransfer; ?></p>

    <p><b>Medical:</b> <?php echo $medical; ?></p>

    <p><b>Citizenship:</b> <?php echo $citizenship . " (" . $birthCountry . ")"; ?></p>

    <p><b>Programs:</b>
        <?php echo !empty($programs) ? implode(", ", $programs) : "None"; ?>
    </p>

</div>

<?php } ?>

</body>
</html>