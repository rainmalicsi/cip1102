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
            margin: 0px auto;
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
                Lecture 3: Strings
            </td>
        </tr>
        <tr>
            <td>Activity No.</td>
            <td>Activity 1</td>
            <td>Date</td>
            <td>06/17/2025</td>
        </tr>
    </table>

    <?php
        echo "<h3>preg_match using /0.{10}to validate mobile number/</h3>";
        // /ZIP: .{5}$/
        $mobileNumber = "09178765432";
        $substring = substr( $mobileNumber,0,2);
        if (preg_match("/0.{10}$/", $mobileNumber)) {
            echo "<br>The number {$mobileNumber} is a valid number.";
            $withCountryCode = str_replace("0","+63", $mobileNumber);
            echo "<br>The mobile number with country code from the Philippines is {$withCountryCode}";
            if (preg_match("/^0904/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0905/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0906/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0915/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0916/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0917/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0926/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0927/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0935/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0936/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0937/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0945/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0952/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0953/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0954/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0955/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }

            elseif (preg_match("/^0956/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0958/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0959/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0965/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0966/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0967/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0975/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0976/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0977/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GOMO network.";
            }
            elseif (preg_match("/^0978/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0979/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0995/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0996/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0997/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0817/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^09175/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^09173/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^09176/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^09178/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^09253/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^09255/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^09256/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^09257/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^09258/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a GLOBE/TM network.";
            }
            elseif (preg_match("/^0998/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0900/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0907/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0908/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0909/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0910/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0911/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0912/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0913/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0914/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0915/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0918/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0919/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0920/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0921/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0928/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0929/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0930/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0938/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0939/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0940/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0946/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0947/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0948/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0949/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0950/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0951/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0960/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0961/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0963/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0964/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0968/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0969/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0970/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0971/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0980/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0981/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0982/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0985/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0989/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0998/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0999/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0922/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0923/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0924/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0925/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0931/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0932/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0933/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0934/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0941/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0942/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0943/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0944/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0962/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0972/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0973/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0974/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network (previously Sun Cellular).";
            }
            elseif (preg_match("/^0991/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a DITO telecommunications.";
            }
            elseif (preg_match("/^0992/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a DITO telecommunications.";
            }
            elseif (preg_match("/^0993/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a DITO telecommunications.";
            }
            elseif (preg_match("/^0994/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a DITO telecommunications.";
            }
            elseif (preg_match("/^0895/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a DITO telecommunications.";
            }
            elseif (preg_match("/^0896/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a DITO telecommunications.";
            }
            elseif (preg_match("/^0897/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a DITO telecommunications.";
            }
            elseif (preg_match("/^0898/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a DITO telecommunications.";
            }

        } else {
            echo "<br>The number {$mobileNumber} is not a valid number.";
        }

        
      
        // //preg_match caret
        // echo "<h3>preg_match using caret</h3>";

        // $url = "http://www.youtubephilippines.com";
        // if (preg_match("/^http/", $url)) {
        //     echo "<br>The url <i>{$url}</i> is a valid url";
        // }
        // else {
        //     echo "<br>The url {url} is a not valid url";
        // }

        // //preg_match dollar sign
        // echo "<h3>preg_match using dollar sign</h3>";

        // $url2 = "http://www.valenzuelalibrary.gov";
        // if (preg_match("/gov$/", $url2)) {
        //     echo "<br>The url <i>{$url2}</i> is a valid url";
        // }
        // else {
        //     echo "<br>The url {$url2} is a not valid url";
        // }

        // //preg_match question mark
        // echo "<h3>preg_match using question mark</h3>";

        // $url3 = "http://www.facebook.gov";
        // if (preg_match("/^https?/", $url3)) {
        //     echo "<br>The url <i>{$url3}</i> is a valid url";
        // }
        // else {
        //     echo "<br>The url {$url3} is a not valid url";
        // }

        // //preg_match addition
        // echo "<h3>preg_match using addition sign</h3>";

        // $name = "Rain";
        // if (preg_match("/.+/", $name)) {
        //     echo "<br>The name <i>{$name}</i> matches";
        // }
        // else {
        //     echo "<br>The name {$name} matches";
        // }

        // //preg_match asterisk
        // echo "<h3>preg_match using asterisk</h3>";

        // $numberString = "00125";
        // if (preg_match("/^0*/", $numberString)) {
        //     echo "<br>The number stirng <i>{$numberString}</i> matches";
        // }
        // else {
        //     echo "<br>The number string {$numberString} matches";
        // }

        // //preg_match {} quantifiers
        // echo "<h3>preg_match using {} quantifiers</h3>";

        // if (preg_match("/ZIP: .{5}$/", " ZIP: 01562")) {
        //     echo "<br>The zip <i>{$numberString}</i> has 5 characters";
        // }
        // echo "<br>";
        // echo preg_match("/{ZIP: .{5, 10}}$/", " ZIP: 01562-2607");

        // //preg_match [] squar   e brackets
        
        // echo "<h3>preg_match using []</h3>";

        
        // echo preg_match("/analy[sz]e/", "analyse");
        // echo "<br>";
        // echo preg_match("/analy[sz]e/", "analyze");
        // echo "<br>";
        // echo preg_match("/analy[sz]e/", "analyce");
        // echo "<br>";

        // echo "<h3>preg_match using hyphen metacharacter</h3>";

        // $LetterGrade = "A";
        // echo preg_match("/[A-DF]/", $LetterGrade);


        // $numberString = "00125";
        // if (preg_match("/^0*/", $numberString)) {
        //     echo "<br>The number stirng <i>{$numberString}</i> matches";
        // }
        // else {
        //     echo "<br>The number string {$numberString} matches";
        // }
        // echo "<br>";
    ?>
</body>
</html>