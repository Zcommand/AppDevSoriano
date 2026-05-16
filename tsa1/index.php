<?php
$pageTitle = "Student Registration Form";


$studentNumber = "202410929";
$fname = "John Ronen";
$mname = "Espiritu";
$lname = "Soriano";
$gender = "Male";
$dob = "2006-04-25";

$previousSchool = "ICP: Sta. Maria";
$previousGrade  = "Grade 12";
$reasonTransfer = "Completed senior high school";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">


        <header class="header">
            <img src="header.png" alt="FEU Header">
        </header>

        <main class="main-content">

            <form>

            
                <section class="section">
                    <h3>Personal Profile</h3>

                    <label>Student Number</label>
                    <input type="text" name="studentNumber" value="<?= $studentNumber ?>">

                    <label>First Name</label>
                    <input type="text" name="firstName" value="<?= $fname ?>">

                    <label>Middle Name</label>
                    <input type="text" name="middleName" value="<?= $mname ?>">

                    <label>Last Name</label>
                    <input type="text" name="lastName" value="<?= $lname ?>">

                    <label>Gender</label>
                    <input type="text" name="gender" value="<?= $gender ?>">

                    <label>Date of Birth</label>
                    <input type="date" name="dob" value="<?= $dob ?>">
                </section>

                
                <section class="section">
                    <h3>Educational Attainment</h3>

                    <label>Previous School</label>
                    <input type="text" name="previousSchool" value="<?= $previousSchool ?>">

                    <label>Previous Grade</label>
                    <input type="text" name="previousGrade" value="<?= $previousGrade ?>">

                    <label>Reason for Transfer</label>
                    <input type="text" name="reasonTransfer" value="<?= $reasonTransfer ?>">
                </section>

            </form>

        </main>


        <footer class="footer">
            <p>&copy;2026 by John Ronen Soriano | TSA 1</p>
        </footer>

    </div>

</body>

</html>