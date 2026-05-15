<?php
date_default_timezone_set('Asia/Manila');
echo date('e'); 

echo date('T');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <link rel="stylesheet" href="resources/style.css">
</head>

<body>
    <!-- div.container>header.header>div.banner>h1{Pre-defined Functions}+p{This is a sample page for demonstrating the use of pre-defined functions in PHP}^nav.navigation>ul>li*4^^^main>section>h2{Index Page}+p+p^^footer.footer>p{&copy;2026 by John Ronen Soriano} -->
    <div class="container">
        <header class="header">
            <div class="banner">
                <h1>Pre-defined Functions</h1>
                <p>This is a sample page for demonstrating the use of pre-defined functions in PHP</p>
                <p><?= date( ' l, F d Y, h:m:s A') ?></p>
            </div>
            <nav class="navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>