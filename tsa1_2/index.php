<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>

    <style>
        :root {
            --green: #006b3c;
            --light: #f5f5f5;
            --yellow: #ffeb3b;
        }

        body {
            font-family: 'Times New Roman', serif;
            padding: 20px;
            background-color: var(--light);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--green);
        }

        
        table {
            border-collapse: collapse;
            margin: auto;
            border: 2px solid #333;
        }

        /* CELLS */
        td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            width: 50px;
            height: 50px;
        }

        
        .yellow {
            background-color: var(--yellow);
        }

        .green {
            background-color: var(--green);
        }
    </style>
</head>


<body>

    <h1>Multiplication Table</h1>

    <table>
        <?php
        $maxNumber = 10;

        for ($row = 0; $row <= $maxNumber; $row++) {

            echo "<tr>";

            for ($col = 0; $col <= $maxNumber; $col++) {
                $product = $row * $col;
                if (($row + $col) % 2 === 0) {
                    $colorClass = "yellow";
                } else {
                    $colorClass = "green";
                }
                echo "<td class='{$colorClass}'>$product</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>