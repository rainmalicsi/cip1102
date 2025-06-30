<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY HANDS-ON ACTIVITY</title>
    <style>
        body {
            font-family: 'century gothic', sans-serif;
            background-color: rgb(246, 227, 237);
            font-size: large;
            text-align: center;

            h1 {
                color: rgb(64, 99, 114);
                font-family: 'century gothic', sans-serif;
            }

            h1,
            h2 {
                color: rgb(64, 99, 114);
                font-family: 'century gothic', sans-serif;
            }

            h3 {
                color: rgb(68, 110, 117);
                font-family: 'century gothic', sans-serif;
                font-size: 25px;
            }

            h4 {
                color: rgb(121, 59, 80);
                font-style: italic;
                padding: 2px;
            }

            th {
                padding: 20px;
                text-align: left;
                font-weight: normal;
                border: 1px solid black;
                text-align: center;
                background-color: rgb(240, 208, 220);
                font-weight: bold;

            }

            td {
                padding: 20px;
                border: 1px solid black;
                text-align: center;
                background-color: rgba(255, 247, 225, 0.9);
            }

            table {
                border: 1px solid black;
                border-collapse: collapse;
                width: 90%;
                margin: 0 auto;
            }

            div {
                width: 60%;
                margin: 0 auto;
                padding: 20px;
                border-radius: 10px;
                background-color: rgba(164, 205, 211, 0.68);
                box-shadow: 5px 5px 4px rgba(0, 0, 0, 0.2);
            }

            form {
                margin: 0 auto;
                box-shadow: 5px 5px 4px rgba(0, 0, 0, 0.25);
                padding: 20px;
                width: 90%;
                background-color: whitesmoke;
                border-radius: 15px;
                padding-bottom: 20px;
                margin-bottom: 20px;
            }

            label {
                font-weight: bold;
            }

            input[type=submit] {
                background-color: rgb(58, 120, 125);
                padding: 15px;
                border-radius: 10px;
                color: aliceblue;
                font-family: 'century gothic';
                font-weight: bold;
                font-size: 15px;
                margin-bottom: 40px;

            }

            input[type=text] {
                background-color: beige;
                padding: 10px;
                border-radius: 20px;
            }
        }

        .essay {
            width: 60%;
            background-color: rgba(233, 241, 242, 0.9);
            text-align: justify;
            padding: 20px;
        }

        .code {
            width: 90%;
            background-color: whitesmoke;
            text-align: left;
        }

        .title {
            color: rgb(64, 99, 114);
            font-family: 'century gothic', sans-serif;
            padding: 10px;
            padding-left: 40px;
        }

        .output {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(243, 236, 217, 0.54);
            box-shadow: 5px 5px 4px rgba(0, 0, 0, 0.2);
        }

        span {
            font-weight: bold;
            color: rgb(64, 99, 114);
            text-transform: uppercase;
        }

        label {
            font-weight: bold;
            font-size: 25px;
            color: rgb(64, 99, 114);
        }
    </style>
</head>

<body>
    <br><br><br>
    <div>
        <table>
            <tr>
                <th>Name: </th>
                <td>MARANION, JEWELLA MARIE A.<br>MALICSI, RAIN DAVID P.</td>
                <th>Topic:</th>
                <td>MIDTERM LESSONS</td>
            </tr>
            <tr>
                <th>Activity No.:</th>
                <td>MIDTERM EXAM</td>
                <th>Date</th>
                <td>06/20/2025</td>
            </tr>
        </table>
    </div>
    <br><br><br>
    <?php

    $conn = new mysqli('localhost', 'root', '', 'summer2025');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT BOOK_ID, TITLE, AUTHOR, COPYRIGHT_YEAR, PUBLICATION, CALL_NUMBER, NO_OF_COPIES FROM maranion_malicsi_books";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table><tr><th>Book ID</th><th>Title</th><th>Author</th><th>Copyright Year</th><th>Publication</th><th>Call Number</th><th>No. of Copies</th></tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['BOOK_ID']}</td>
                    <td>{$row['TITLE']}</td>
                    <td>{$row['AUTHOR']}</td>
                    <td>{$row['COPYRIGHT_YEAR']}</td>
                    <td>{$row['PUBLICATION']}</td>
                    <td>{$row['CALL_NUMBER']}</td>
                    <td>{$row['NO_OF_COPIES']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
?>


</html>