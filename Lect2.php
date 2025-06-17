<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lecture 2</title>

    <style>
        

        td {
            border: 1px dashed green;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    
    <?php
        //DEFINING FUNCTIONS
        echo "<h1> Defining Functions</h1>";
        function displayCompany($Company1, $Company2, $Company3) {
            echo "<p>$Company1</p>";
            echo "<p>$Company2</p>";
            echo "<p>$Company3</p>";
        }

        displayCompany("Globe", "Smart", "Talk and Text");


        //RETURNING VALUES
        echo "<h1> Returning Values</h1>";
        function averageNumbers($a, $b, $c) {
            $SumOfNumbers = $a + $b + $c;
            $Result = $SumOfNumbers / 3;

            echo "<p>The average of ", $a, " , ", $b, " and ", $c, " is ", $Result, ".</p>";
            return $Result;
        }

        averageNumbers(1.25,1.50,1.75);

        //CONTROL STRUCTURES
        echo "<h1>Control Structures</h1>";
        $ExampleVar = 5;
        if ($ExampleVar == 5) { // condition evaluates to 'TRUE'
            echo "<p>The condition evaluates to true.</p>";
            echo '<p>$ExampleVar is equal to ', " $ExampleVar.</p>";
            echo "<p>Each of these lines will be printed.</p>";
        }
        echo "<p>This statement always executes after the if statement.</p>";

        //DRILL 1
        echo "<h1>DRILL 1</h2>";
        $tomorrow = "friday";
        if ($tomorrow == "friday") {
            echo "<p>Yes, Tomorrow is Friday.</p>";
        }
        else {
            echo "<p>No, tomorrow is not Friday.</p>";
        }
        echo "<p>It's a happy day!</p>";

        //DRILL 2 - check f there is a consonant in the vowel. if there is then print the consonant if none then print there is no consonant in the listw
        echo "<h1>DRILL 2</h1>";
        $vowel = "I";
        if ($vowel == "a" or $vowel == "A") {
            echo "<p>There is no consonant</p>";
        }
            else if ($vowel == "e" or $vowel == "E") {
                echo "<p>There is no consonant</p>";
            }   
                else if ($vowel == "i" or $vowel == "I") {
                    echo "<p>There is no consonant</p>";
                }
                    else if ($vowel == "o" or $vowel == "O") {
                        echo "<p>There is no consonant</p>";
                    }
                        else if ($vowel == "u" or $vowel == "U") {
                            echo "<p>There is no consonant</p>";
                        }
                            else {
                                echo "The consonant is ", $vowel, ".</p>";
                            }    

        //DRILL 3
        echo "<h1>DRILL 3</h1>";
        switch ($vowel) {
            case "a":
            case "e":
            case "i":
            case "o":
            case "u":
            case "A":
            case "E":
            case "I":
            case "O":
            case "U":
                echo "<p>There is no consonant</p>";
                break;
            default:
                echo "The consonant is ", $vowel, ".</p>";
                break;
        }                        
       
        
        $Count = 1;
        while ($Count <= 5) {
            echo "$Count<br />";
            ++$Count;
        }
        echo "<p>You have printed 5 numbers.</p>";

        //DRILL 4
        echo "<h1>DRILL 4</h1>";
        $Count = 1;
        while ($Count <= 10) {
            echo "<table><td>",$Count,"<td><table>";
            ++$Count;
        }
        echo "</td></table>"
    ?>


</body>
</html>