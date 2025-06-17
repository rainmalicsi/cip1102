<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Activity 2 - SET A</title>

    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            display: inline-block;
        }

        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        body {
            background-color: #9fb8ad;
            font-family: Tahoma;
        }

        th {
            padding: 10px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>
                Name:
            </td>
            <td>
                MALICSI, RAIN DAVID P.
            </td>
            <td>
                Topic
            </td>
            <td>
                Chapter 1: Introduction to PHP
            </td>
        </tr>
        <tr>
            <td>Activity No.</td>
            <td>Activity 1</td>
            <td>Date</td>
            <td>06/11/2025</td>
        </tr>
    </table>

    <table>
        <?php
        echo "<h1>SET A:</h1>";
        echo "<h1>a.1:</h1>";
        echo "<br> \n";

        $Count = 1;
        if ($Count % 2 == 1) {
            $Count++;
            echo "<tr>";
            for ($Count; $Count <= 100; $Count++) {
                if ($Count % 2 == 1) {
                    echo "<td>$Count</td>";
                }
                echo "</tr>";
            }

        }
        echo "<br>"
            ?>
    </table>

    <?php
    echo "<h3>Celcius to Farenheight</h3>";

    echo "<table border='1' cellpadding='5'>";

    echo "<tr><th>Celsius</th><th>Farenheight</th></tr>";

    for ($celcius = 0; $celcius <= 100; $celcius++) {
        $farenheit = ($celcius * 9 / 5) + 32;
        echo "<tr><td>$celcius</td><td>" . round($farenheit, 2) . "</td></tr>";
    }
    echo "</table>";

    echo "<h3>Farenheight to Celcius</h3>";

    echo "<table border='1' cellpadding='5'>";

    echo "<tr><th>Farenheight</th><th>Celcius</th></tr>";


    echo "</tr>";

    for ($farenheit = 0; $farenheit <= 100; $farenheit++) {
        $celcius = ($farenheit - 32) * 5 / 9;
        echo "<tr><td>$farenheit</td><td>" . round($celcius, 2) . "</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>