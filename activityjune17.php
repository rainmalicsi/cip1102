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
        $first = "the ue is the best school hey needed";
        $second = "they are studying at ue sheeshed";
        
        $array1 = explode(" ", $first);
        print_r( $array1 );

        echo "<br>";

        for ( $i = 0; $i < count( $array1 ); $i++) {
            if (str_starts_with($array1[$i], "th")) {
                echo "The word ". $array1[$i] ." starts with th.";
                echo "<br>";
            } elseif (str_ends_with($array1[$i],"ed")) {
                echo "The word ". $array1[$i] ." ends with ed.";
                echo "<br>";
            }
        }

        $array2 = explode(" ", $second);
        print_r( $array2 );

        echo "<br>";

        for ( $i = 0; $i < count( $array2 ); $i++) {
            if (str_starts_with($array2[$i], "th")) {
                echo "The word ". $array2[$i] ." starts with th.";
                echo "<br>";
            } elseif (str_ends_with($array2[$i],"ed")) {
                echo "The word ". $array2[$i] ." ends with ed.";
                echo "<br>";
            }
        }

        

        $zip = "0156";
        if (preg_match('/..../', $zip)) {
            echo "<br><br> The zip code {$zip} is valid.";
        } else {
            echo "<br>The zip code is not valid.";
        }

        $number = "09662813490";
        if (preg_match('/.........../', $zip)) {
            echo "<br><br> The number {$number} is valid.";
        } else {
            echo "<br>The number {$number} is not valid.";
        }

        //preg_match caret
        echo "<h1>preg_match using caret</h1>";

        $url = "http://www.youtubephilippines.com";
        if (preg_match("/^http/", $url)) {
            echo "<br>The url <i>{$url}</i> is a valid url";
        }
        else {
            echo "<br>The url {url} is a not valid url";
        }

        //preg_match dollar sign
        echo "<h1>preg_match using dollar sign</h1>";

        $url2 = "http://www.valenzuelalibrary.gov";
        if (preg_match("/gov$/", $url2)) {
            echo "<br>The url <i>{$url2}</i> is a valid url";
        }
        else {
            echo "<br>The url {$url2} is a not valid url";
        }

        //preg_match question mark
        echo "<h1>preg_match using question mark</h1>";

        $url3 = "http://www.facebook.gov";
        if (preg_match("/^https?/", $url3)) {
            echo "<br>The url <i>{$url3}</i> is a valid url";
        }
        else {
            echo "<br>The url {$url3} is a not valid url";
        }

        //preg_match addition
        echo "<h1>preg_match using addition sign</h1>";

        $name = "Rain";
        if (preg_match("/.+/", $name)) {
            echo "<br>The name <i>{$name}</i> matches";
        }
        else {
            echo "<br>The name {$name} matches";
        }

        //preg_match asterisk
        echo "<h1>preg_match using asterisk</h1>";

        $numberString = "00125";
        if (preg_match("/^0*/", $numberString)) {
            echo "<br>The number stirng <i>{$numberString}</i> matches";
        }
        else {
            echo "<br>The number string {$numberString} matches";
        }

        //preg_match {} quantifiers
        echo "<h1>preg_match using {} quantifiers</h1>";

        echo preg_match("/ZIP: .{5}$/", " ZIP: 01562");
        echo "<br>";
        echo preg_match("/{ZIP: .{5, 10}}$/", " ZIP: 01562-2607");
        echo "<br>";

        //preg_match [] square brackets
        echo "<h1>preg_match using []</h1>";

        
        echo preg_match("/analy[sz]e/", "analyse");
        echo "<br>";
        echo preg_match("/analy[sz]e/", "analyze");
        echo "<br>";
        echo preg_match("/analy[sz]e/", "analyce");
        echo "<br>";

        echo "<h1>preg_match using hyphen metacharacter</h1>";

        $LetterGrade = "A";
        echo preg_match("/[A-DF]/", $LetterGrade);

        
        $numberString = "00125";
        if (preg_match("/^0*/", $numberString)) {
            echo "<br>The number stirng <i>{$numberString}</i> matches";
        }
        else {
            echo "<br>The number string {$numberString} matches";
        }
        echo "<br>";
    ?>
</body>
</html>