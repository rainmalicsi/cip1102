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
    for ($i = $height - 2; $i >= 0; $i--) {
        for ($j = 0; $j < $height - $i - 1; $j++) {
            echo "&nbsp;&nbsp;";
        }

        for ($k = 0; $k < 2 * $i + 1; $k++) {
            echo "<span style='background-color:red'>*</span>";
        }
        echo "<br>";
    }
    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $height - $i - 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k < 2 * $i + 1; $k++) {
            echo "<span style='color:red'>*</span>";
        }
        echo "<br>";
    }

    ?>

    <table>
        <form action="">
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </form>
    </table>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

    <?php
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];

    echo "THank you for filling out the scholarship form, {$firstName} {$lastName}."


    ?>
</body>

</html>