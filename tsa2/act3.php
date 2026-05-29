<?php $pageTitle = "Resume Layout"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="page-wrapper">

        <?php include 'header.inc'; ?>

        <div class="resume-container">


            <div class="top-section">

                <div class="profile">
                    <img src="formal.jpeg" alt="Profile Photo">
                </div>

                <div class="personal-info">
                    <div>
                        <a class="personal-link" href="personal.php">
                            Personal Information
                        </a>
                    </div>
                </div>

            </div>


            <div class="sections">

                <a class="section" href="career.php">Career Objective</a>
                <a class="section" href="education.php">Educational Attainment</a>
                <a class="section" href="skills.php">Skills</a>
                <a class="section" href="affiliation.php">Affiliation</a>
                <a class="section" href="experience.php">Work Experience</a>

            </div>

        </div>
        <a class="return-btn" href="index.php">Return to Main Menu</a>
    </div>

    <?php include 'footer.inc'; ?>
</body>

</html>