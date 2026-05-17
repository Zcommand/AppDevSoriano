<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FA4 Laboratory</title>
<link rel="stylesheet" href="style.css">

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #ffffff;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.header {
    background: #02aa18;
    color: white;
    text-align: center;
    padding: 18px;
    font-size: 20px;
    font-weight: bold;
}

.menu {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 20px;
    padding: 30px;
}

.card {
    width: 80%;
    max-width: 600px;
    padding: 30px;
    background: white;
    border: 2px solid #37a202;
    border-radius: 12px;
    text-decoration: none;
    color: #212020;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    transition: 0.2s;
}

.card:hover {
    transform: scale(1.03);
    background: #e5ffe6;
}

.footer {
    background: rgb(14, 14, 14);
    color: white;
    text-align: center;
    padding: 12px;
    font-size: 14px;
}
</style>

</head>

<body>

<div class="header">
    PHP LABORATORY ACTIVITY MENU
</div>

<div class="menu">

    <a class="card" href="activity1.php">
        Activity 1: Array Operations
    </a>

    <a class="card" href="activity2.php">
        Activity 2: String Functions
    </a>

</div>

<div class="footer">
    FA4 Laboratory Activity • PHP System
</div>

</body>
</html>