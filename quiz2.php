<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                Chapter 2: Functions and Control Structure
            </td>
        </tr>
        <tr>
            <td>Quiz No.</td>
            <td>Hands-on Quiz 1</td>
            <td>Date</td>
            <td>06/16/2025</td>
        </tr>
    </table>

    <?php

    $height = 10;
        for ($i = 0; $i < $height; $i++) {
            
            for ($j = $height * 2; $j > $height - $i - 1; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = $height * 2; $k > 2 * $i + 1; $k--) {
                echo "<span style='background-color:red'>$</span>";
            }
            echo "<br>";
        }
        for ($i = 0; $i < $height; $i++) {
            if ($height == 20) {
                for ($j = 0; $j < $height - $i - 1; $j++) {
                echo "&nbsp;&nbsp;";
                }
                for ($k = 0; $k < 2 * $i + 1; $k++) {
                    echo "<span style='background-color:red'>$</span>";
                }
                echo "<br>";
            }
            else {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

                for ($j = 0; $j < $height - $i - 1; $j++) {
                echo "&nbsp;&nbsp;";
                }
                for ($k = 0; $k < 2 * $i + 1; $k++) {
                    echo "<span style='background-color:red'>$</span>";
                }
                echo "<br>";
            }
            
        }
        
        echo "<br>";
        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $height - $i; $j--) {
                echo "&nbsp;&nbsp;";
            }

            for ($k = 10; $k > 2 * $i + 1; $k--) {
                echo "<span style='background-color:red'>$</span>";
            }
            
            echo "<br>";
        }
    ?>

    <?php
        echo "<br>";
        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $height - $i; $j--) {
                echo "&nbsp;&nbsp;";
            }

            for ($k = 10; $k > 2 * $i + 1; $k--) {
                echo "<span style='background-color:red'>$</span>";
            }
            
            echo "<br>";
        }
    ?>
</body>

</html>