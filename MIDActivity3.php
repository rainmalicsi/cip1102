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
                Chapter 3
            </td>
        </tr>
        <tr>
            <td>Activity No.</td>
            <td>Activity 3</td>
            <td>Date</td>
            <td>06/17/2025</td>
        </tr>
    </table>

    <?php
        echo "<h1>SET: Mobile Phone Numbers</h1>";
        echo "<h3>preg_match using /0.{10} to validate mobile number/</h3>";
        //preg_match to validate mobile number
        $mobileNumber = "09662813490";
        if (preg_match("/0.{10}$/", $mobileNumber)) {
            echo "<br>The number {$mobileNumber} is a valid number.";
            $withCountryCode = substr_replace($mobileNumber, "+63", 0, 1);
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
            elseif (preg_match("/^0813/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart Postpaid network.";
            }
            elseif (preg_match("/^0900/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0907/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0908/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0909/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0910/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0911/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0912/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0913/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0914/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0915/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0918/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart or TNT network.";
            }
            elseif (preg_match("/^0919/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart or TNT network.";
            }
            elseif (preg_match("/^0920/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart or TNT network.";
            }
            elseif (preg_match("/^0921/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart or TNT network.";
            }
            elseif (preg_match("/^0928/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart or TNT network.";
            }
            elseif (preg_match("/^0929/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0930/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0938/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0939/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0940/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0946/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0947/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0948/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0949/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0950/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT network.";
            }
            elseif (preg_match("/^0951/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0960/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0961/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0963/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a TNT 5G Ready Sim network.";
            }
            elseif (preg_match("/^0964/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0968/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0969/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0970/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0971/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0980/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0981/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0982/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0985/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0989/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0998/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
            }
            elseif (preg_match("/^0999/", $mobileNumber)) {
                echo "<br>The number <i>{$mobileNumber}</i> is a Smart network.";
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
    ?>
</body>
</html>