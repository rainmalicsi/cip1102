<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Exam</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            margin: 0px auto;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        td,
        th {
            border: 2px solid #3F403F;
            border-collapse: collapse;
            padding: 5px;
        }

        body {
            background-color: #9fb8ad;
            font-family: Tahoma;
        }


        div {
            background-color: antiquewhite;
            padding: 10px;
            padding-bottom: 20px;
            l
        }

        input {
            padding: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #3F403F;
        }

        /* h3 {
            font: optional;;
        } */
    </style>
</head>

<body>
    <table>
        <tr>
            <th>
                Name:
            </th>
            <td>
                MALICSI, RAIN DAVID P.
            </td>
            <th>
                Topics
            </th>
            <td>
                Chapters 1-5
            </td>
        </tr>
        <tr>
            <th>Exam</th>
            <td>Midterm Examination</td>
            <th>Date</th>
            <td>06/20/2025</td>
        </tr>
    </table>

    <?php
    echo "<h1>PROBLEM 1:</h1>";
    //create a user-defined function that allows the user to input an number
    echo "<div>";

    function inputNumber(&$number)
    {
        echo "<form method='post' action='MidExam.php'>";
        echo "<label for='number'>Enter a number:&nbsp;&nbsp;&nbsp;</label>";
        echo "<input type='number' name='number' id='number' required>";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    }

    if (isset($_POST['number'])) {
        $number = $_POST['number'];
    } else {
        inputNumber($number);
    }
    echo '<br>';


    if (is_numeric($number)) {
        echo "INPUT: {$number}";
        echo "<br>Number is numeric.";
        if (strlen($number) < 8) {
            echo "<br>Number is 8 digits.";
            echo "<br>";
            // Convert the number to a string and split it into individual digits
            echo "OUTPUT: ";
            $digits = str_split($number);
            // count how many digits are even and odd
            $evenCount = 0;
            $oddCount = 0;
            foreach ($digits as $num) {
                if ($num % 2 == 0) {
                    $evenCount++;
                } else {
                    $oddCount++;
                }
            }
            echo "<b>{$evenCount} even digits and {$oddCount} odd digits. </b><br>";
        } else {
            echo "<br>Number is invalid. It should be 8 digits long.";
        }
    } else {
        echo "<br>Only digits are allowed in the input.";
    }
    echo "</div>";
    ?>
    
    <?php

    //input numbers with maximum of 7 digits
    echo "<h1>PROBLEM 2:</h1>";
    // Create a user-defined function that allows the user to input a number with a maximum of 7 digits
    echo "<div>";
    function inputNumber2(&$number2)
    {
        echo "<form method='post' action='MidExam.php'>";
        echo "<label for='number2'>Enter a 7-digit number:&nbsp;&nbsp;&nbsp;</label>";
        echo "<input type='number2' name='number2' id='number2' size=7 required>";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    }

    if (isset($_POST['number2'])) {
        $number2 = $_POST['number2'];
    } else {
        inputNumber2($number2);
    }
    echo '<br>';

    if (is_numeric($number2)) {
        if (strlen($number2) <= 7) {
            echo "INPUT: <u>" . substr($number2, 0, 1) . "</u>" . substr($number2, 1, strlen($number2));
            
            switch ($number2) {
                case strlen($number2) == 1:
                    echo "<br>OUTPUT: <b>Ones</b>";
                    break;
                case strlen($number2) == 2:
                    echo "<br>OUTPUT: <b>Tenths</b>";
                    break;
                case strlen($number2) == 3:
                    echo "<br>OUTPUT: <b>Hundreds</b>";
                    break;
                case strlen($number2) == 4:
                    echo "<br>OUTPUT: <b>Thousands</b>";
                    break;
                case strlen($number2) == 5:
                    echo "<br>OUTPUT: <b>Ten Thousands</b>";
                    break;
                case strlen($number2) == 6:
                    echo "<br>OUTPUT: <b>Hundred Thousands</b>";
                    break;
                case strlen($number2) == 7:
                    echo "<br>OUTPUT: <b>Millions</b>";
                    break;
                default:
                    echo "Invalid number of digits.";
            }
        } else {
            echo "<br>Number is invalid. It should be a maximum of 7 digits long.";
        }
    } else {
        echo "<br>Only digits are allowed in the input.";
    }
    echo "</div>";
    ?>
</body>

</html>