<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Array Laboratory - Main Menu</title>

    <style>
        :root {
            --green: #006b3c;
            --dark-green: #004d2a;
            --border: #ddd;
            --radius: 10px;
            --padding: 15px;
            --font: Arial, sans-serif;
            --bg: #f2f6f3;
        }

        body {
            font-family: var(--font);
            background: var(--bg);
            padding: 20px;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: auto;
            background: white;
            border: 3px double var(--green);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: var(--green);
            color: white;
            padding: var(--padding);
            text-align: center;
        }

        .sub {
            text-align: center;
            padding: 10px;
            color: #555;
            border-bottom: 1px solid var(--border);
        }

        .menu {
            display: grid;
            gap: 15px;
            padding: 20px;
        }

        .card {
            display: block;
            border: 2px solid var(--green);
            border-radius: var(--radius);
            padding: 15px;
            text-align: center;
            text-decoration: none;
            color: var(--green);
            font-weight: bold;
            transition: 0.2s;
        }

        .card:hover {
            background: #f1f9f4;
            transform: scale(1.02);
        }

        .card a {
            text-decoration: none;
            color: var(--green);
            font-weight: bold;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="header">
            <h1>PHP ARRAY LABORATORY ACTIVITY</h1>
        </div>

        <div class="sub">
            &copy; 2026 by John Ronen Soriano
        </div>

        <div class="menu">

            <a class="card" href="birthdays.php">
                Activity 1: Array Sorting (Database View)
            </a>

            <a class="card" href="operations.php">
                Activity 2: Array Operations
            </a>

            <a class="card" href="udf.php">
                Activity 3: User Defined Function
            </a>

        </div>
    </div>

            
     
</body>

</html>