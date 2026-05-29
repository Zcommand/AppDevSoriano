<?php $pageTitle = "Educational Attainment"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php require 'header.inc'; ?>

    <div class="container">

        <div class="header">EDUCATIONAL ATTAINMENT</div>

        <table>
            <tr>
                <td style="padding:25px; line-height:1.6;">
                    <b>College</b><br>
                    BSIT:WMA
                    <br>
                    Far Eastern University: Institute of Technology
                    <br>
                    Year: 2024 - Present
                </td>
            </tr>

            <tr>
                <td style="padding:25px; line-height:1.6;">
                    <b>Senior High School</b><br>
                    ICT
                    <br>
                    ICP: Sta. Maria
                    <br>
                    Year: 2022 - 2024
                </td>
            </tr>
        </table>

        <a class="return-btn" href="act3.php">Back to Resume</a>

    </div>

    <?php include 'footer.inc'; ?>

</body>

</html>