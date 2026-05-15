<?php
$pageTitle = "Student Registration Form";

$errors = [];
$programs = [];

$fname = $mname = $lname = $gender = $dob = "";
$previousSchool = $previousGrade = $reasonTransfer = "";
$medical = "";
$birthCountry = $citizenship = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // SCHOOL USE
    $studentNumber = $_POST["studentNumber"] ?? "";
    $entryDate = $_POST["entryDate"] ?? "";
    $entryType = $_POST["entryType"] ?? "";
    $grade = $_POST["grade"] ?? "";
    $oen = $_POST["oen"] ?? "";
    $homeroom = $_POST["classHomeroom"] ?? "";

    // STUDENT INFORMATION
    $fname = ucwords(strtolower($_POST["firstName"] ?? ""));
    $mname = ucwords(strtolower($_POST["middleName"] ?? ""));
    $lname = ucwords(strtolower($_POST["lastName"] ?? ""));
    $gender = $_POST["gender"] ?? "";
    $dob = $_POST["dob"] ?? "";

    // PREVIOUS SCHOOL
    $previousSchool = trim($_POST["previousSchool"] ?? "") ?: "N/A";
    $previousGrade  = trim($_POST["previousGrade"] ?? "") ?: "N/A";
    $reasonTransfer = trim($_POST["reasonTransfer"] ?? "") ?: "N/A";

    // HEALTH
    $medical = trim($_POST["medical"] ?? "") ?: "N/A";

    // CITIZENSHIP
    $birthCountry = trim($_POST["birthCountry"] ?? "") ?: "N/A";
    $citizenship  = trim($_POST["citizenship"] ?? "") ?: "N/A";

    // PROGRAMS
    $programs = $_POST["programs"] ?? [];

    // VALIDATION
    if ($fname === "" || $lname === "" || $gender === "" || $dob === "") {
        $errors[] = "Please fill out all required fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <!-- HEADER -->
        <header class="header">
            <div class="banner">
                <h1>FEU Student Registration</h1>
            </div>
        </header>

        <main class="main-content">

            <form method="POST">

                <!-- SCHOOL USE -->
                <section class="section">
                    <h3>For School Use</h3>

                    <label>Student Number</label>
                    <input type="text" name="studentNumber">

                    <label>Entry Date</label>
                    <input type="date" name="entryDate">

                    <label>Entry Type</label>
                    <input type="text" name="entryType">

                    <label>Grade</label>
                    <input type="text" name="grade">

                    <label>OEN</label>
                    <input type="text" name="oen">

                    <label>Class / Homeroom</label>
                    <input type="text" name="classHomeroom">

                    <div class="checkbox-group">
                        <p>Programs</p>

                        <label><input type="checkbox" name="programs[]" value="ESL"> ESL</label>
                        <label><input type="checkbox" name="programs[]" value="SPED"> SPED</label>
                        <label><input type="checkbox" name="programs[]" value="IPRC"> IPRC</label>
                        <label><input type="checkbox" name="programs[]" value="ISA"> ISA</label>
                    </div>
                </section>

                <!-- STUDENT INFO -->
                <section class="section">
                    <h3>Student Information</h3>

                    <label>Last Name <span class="required">*</span></label>
                    <input type="text" name="lastName" required>

                    <label>First Name <span class="required">*</span></label>
                    <input type="text" name="firstName" required>

                    <label>Middle Name</label>
                    <input type="text" name="middleName">

                    <div class="radio-group">
                        <p>Gender <span class="required">*</span></p>

                        <label><input type="radio" name="gender" value="Male" required> Male</label>
                        <label><input type="radio" name="gender" value="Female"> Female</label>
                    </div>

                    <label>Date of Birth <span class="required">*</span></label>
                    <input type="date" name="dob" required>
                </section>

                <!-- PREVIOUS SCHOOL -->
                <section class="section">
                    <h3>Previous School Information</h3>

                    <label>Previous School</label>
                    <input type="text" name="previousSchool">

                    <label>Previous Grade</label>
                    <input type="text" name="previousGrade">

                    <label>Reason for Transfer</label>
                    <input type="text" name="reasonTransfer">
                </section>

                <!-- HEALTH -->
                <section class="section">
                    <h3>Health Information</h3>

                    <label>Medical Conditions</label>
                    <input type="text" name="medical">
                </section>

                <!-- CITIZENSHIP -->
                <section class="section">
                    <h3>Citizenship Information</h3>

                    <label>Birth Country</label>
                    <input type="text" name="birthCountry">

                    <label>Citizenship</label>
                    <input type="text" name="citizenship">
                </section>

                <button type="submit">Submit</button>

            </form>

            <!-- ERRORS -->
            <?php if (!empty($errors)): ?>
                <?php foreach ($errors as $error): ?>
                    <p class="error"><?= $error ?></p>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- OUTPUT -->
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors)): ?>

                <div class="output">

                    <h2>Submitted Information</h2>

                    <p><b>Student Number:</b> <?= $studentNumber ?></p>
                    <p><b>Name:</b> <?= "$fname $mname $lname" ?></p>
                    <p><b>Gender:</b> <?= $gender ?></p>
                    <p><b>Date of Birth:</b> <?= date("F d, Y", strtotime($dob)) ?></p>

                    <p><b>Previous School:</b> <?= $previousSchool ?></p>
                    <p><b>Previous Grade:</b> <?= $previousGrade ?></p>
                    <p><b>Reason:</b> <?= $reasonTransfer ?></p>

                    <p><b>Medical Conditions:</b> <?= $medical ?></p>

                    <p><b>Citizenship:</b> <?= "$citizenship ($birthCountry)" ?></p>

                    <p><b>Programs:</b>
                        <?= !empty($programs) ? implode(", ", $programs) : "None" ?>
                    </p>

                </div>

            <?php endif; ?>

        </main>


        <?php include 'include/footer.php'; ?>

    </div>

</body>

</html>