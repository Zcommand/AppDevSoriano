<?php $pageTitle = "Personal Information"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $pageTitle ?></title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<?php include 'header.inc'; ?>

<div class="container">

    <div class="header">PERSONAL INFORMATION</div>

    <table>
        <tr>
            <td><strong>Full Name:</strong> John Ronen Soriano</td>
        </tr>
        <tr>
            <td><strong>Address:</strong> Manila </td>
        </tr>
        <tr>
            <td><strong>Gender:</strong> Male</td>
        </tr>
        <tr>
            <td><strong>Date of Birth:</strong> 2006-04-25</td>
        </tr>
        <tr>
            <td><strong>Contact:</strong> 09111111111</td>
        </tr>
        <tr>
            <td><strong>Email:</strong> example@email.com</td>
        </tr>

    </table>

    <a class="return-btn" href="act3.php">Back to Resume</a>

</div>

<?php include 'footer.inc'; ?>

</body>
</html>