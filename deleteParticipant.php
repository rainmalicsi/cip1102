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
                Midterm
            </td>
        </tr>
        <tr>
            <th>Exam</th>
            <td>Midterm Examination</td>
            <th>Date</th>
            <td>06/30/2025</td>
        </tr>
    </table>
    
    <?php
    $conn = new mysqli("localhost", "root", "", "summer2025");
    
    // Check connection
    $firstName = $_REQUEST['txt_first_name'];
    $lastName = $_REQUEST['txt_last_name'];
    $email = $_REQUEST['txt_email'];
    $confirmationEmail = $_REQUEST['txt_confirmation_email'];
    // $firstAnswer = $_REQUEST['check_updates'];
    // $secondAnswer = $_REQUEST['check_emails'];  
    
    $queryDELETE = "DELETE FROM malicsi WHERE FIRST_NAME = '$firstName' AND LAST_NAME = '$lastName'";
    if ($conn->query($queryDELETE) === TRUE) {
        echo "Record deleted successfully. <a href='FinQ2%23.php'>Go Back</a>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
    ?>
</body>

</html>