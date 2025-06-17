<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        body{
            background-color: #9fb8ad;
            font-family: Tahoma;
        }
        th {
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
        echo "<table border=1> \n";
        for ($y = 4; $y <= 12; $y++) {
            echo "<tr> \n";
            for ($x = 6; $x <= 12; $x++) {
                echo "<td>";
                echo ($y * $x);
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>