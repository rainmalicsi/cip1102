<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Activity 1</title>
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

    <?php
        //PROBLEM 1
        echo "<h1>Problem 1:</h1>";   
        $originalNumber = 15.5;
        $rounded = round( $originalNumber,0);
        $ceil = ceil( $originalNumber );
        $floor = floor( $originalNumber );

        echo "Original Number: " . $originalNumber . "<br> \n";
        echo "<br>\n";
        echo "The rounded value is: " . $rounded . "<br> \n";
        echo "The ceil value is: " . $ceil . "<br> \n";
        echo "The floor value is: " . $floor . "<br> \n";

        //PROBLEM 2
        echo "<h1>Problem 2:</h1>";
 
    ?>

    <?php
    //conditional statement
    function containsNumber($number1) {
            echo "<p>$number1</p>";
        }

    function even($number1) {
            echo "<p>$number1</p>";
        }

    function odd($number1) {
            echo "<p>$number1</p>";
        }

        $variable = "even";
        echo "The variable is: " . $variable . "<br> \n";
        if ( is_numeric($variable) == false) {
            containsNumber("The variable is not a number");
        }
        else {
            $roundedNumber = round($variable, 0);
            is_numeric( $variable ) ? $roundedNumber % 2 == 0 : containsNumber("The variable is not a number");
            $roundedNumber % 2 == 0 ?  even("<p>The variable contains a number which is " . $roundedNumber . " and it is even</p>") :  odd("<p>The variable contains a number which is " . $roundedNumber . " and it is an <b>ODD</b> number</p>");
        }    
    ?>
</body>
</html>
       
        <!-- /*$variable = 157;
        echo "The variable is: " . $variable . "<br> \n";
        if (is_numeric($variable)) {
            $roundedNumber = round($variable, 0);
            if ($roundedNumber % 2 == 0) {
                echo "The variable contains a number and it is even";
            }
            else {
                echo "The variable contains a number and it is an odd number";
            } 
        }
        else {
            echo "The variable does not contain a number";
        }

        echo "<br>\n";*/ -->