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
            margin-top: 10px;
            margin-bottom: 10px;
        }

        td, th {
            border: 2px solid #3F403F;
            border-collapse: collapse;
            padding: 5px;
        }

        body {
            background-color: #9fb8ad;
            font-family: Tahoma;
        }
        p {
            text-align: center;
        }
        div {
            background-color: antiquewhite;
            padding: 10px;
            padding-bottom: 20px;
            l
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
                Topic
            </th>
            <td>
                Chapter 3
            </td>
        </tr>
        <tr>
            <th>Activity No.</th>
            <td>Activity 3</td>
            <th>Date</th>
            <td>06/17/2025</td>
        </tr>
    </table>

    <?php
    echo "<center>";
    echo "<div>";
    echo "<h1>SET: Mobile Phone Numbers</h1>";
    echo "</div>";
    //preg_match to validate mobile number
    $mobileNumber = "09028134909394";
    $withCountryCode = substr_replace($mobileNumber, "+63", 0, 1);
    echo "<p><br>Mobile Number: <b>{$mobileNumber}</b></p>";
    if (is_numeric($mobileNumber) == true) {
        if (preg_match("/09.{9}$/", $mobileNumber) || preg_match("/08.{9}$/", $mobileNumber)) {
            echo "<br>The number <b>{$mobileNumber}</b> is a valid number.";
            echo "<p><br>The mobile number with country code from the Philippines is <b><u>{$withCountryCode}</u></b>";
    echo "<div>";
            if (preg_match("/^0904/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0905/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0906/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0915/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0916/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0917/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0926/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0927/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0935/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0936/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0937/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0945/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0952/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0953/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0954/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0955/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0956/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0958/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0959/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0965/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0966/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0967/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0975/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0976/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a gomo network.</p>";
            } elseif (preg_match("/^0977/", $mobileNumber)) {
                echo "<br>The number <i>{$withCountryCode}</i> is a GOMO network.";
            } elseif (preg_match("/^0978/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0979/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0995/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0996/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0997/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0817/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^09175/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^09173/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^09176/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^09178/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^09253/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^09255/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^09256/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^09257/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^09258/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a GLOBE/TM network.</p>";
            } elseif (preg_match("/^0813/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart Postpaid network.</p>";
            } elseif (preg_match("/^0900/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0907/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0908/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0909/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0910/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0911/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0912/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0913/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0914/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0915/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0918/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart or TNT network.</p>";
            } elseif (preg_match("/^0919/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart or TNT network.</p>";
            } elseif (preg_match("/^0920/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart or TNT network.</p>";
            } elseif (preg_match("/^0921/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart or TNT network.</p>";
            } elseif (preg_match("/^0928/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart or TNT network.</p>";
            } elseif (preg_match("/^0929/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0930/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0938/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0939/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0940/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0946/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0947/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0948/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0949/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0950/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT network.</p>";
            } elseif (preg_match("/^0951/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0960/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0961/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0963/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a TNT 5G Ready Sim network.</p>";
            } elseif (preg_match("/^0964/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0968/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0969/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0970/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0971/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0980/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0981/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0982/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0985/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0989/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0998/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0999/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network.</p>";
            } elseif (preg_match("/^0922/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0923/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0924/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0925/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0931/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0932/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0933/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0934/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0941/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0942/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0943/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0944/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0962/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0972/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0973/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0974/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a Smart network (previously Sun Cellular).</p>";
            } elseif (preg_match("/^0991/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a DITO telecommunications.</p>";
            } elseif (preg_match("/^0992/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a DITO telecommunications.</p>";
            } elseif (preg_match("/^0993/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a DITO telecommunications.</p>";
            } elseif (preg_match("/^0994/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a DITO telecommunications.</p>";
            } elseif (preg_match("/^0895/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a DITO telecommunications.</p>";
            } elseif (preg_match("/^0896/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a DITO telecommunications.</p>";
            } elseif (preg_match("/^0897/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a DITO telecommunications.</p>";
            } elseif (preg_match("/^0898/", $mobileNumber)) {
                echo "<p><br>The number <i>{$withCountryCode}</i> is a DITO telecommunications.</p>";
            } else {
                echo "<p><br>The number <b>{$withCountryCode}</b> is on unassigned network.</p>";
            }
            
        } else {
            echo "<div>";
            echo "<br>The number {$withCountryCode} is an invalid number. It should contain 11-digits characters.";
            echo "</div>";
        }
    } else {
        echo "<div>";
        echo "<br>The number {$withCountryCode} is an invalid number.   ";
        echo "</div>";
    }
    echo "</div>";
    echo "</center>";

    ?>
</body>

</html>