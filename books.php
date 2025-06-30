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
                border: outset solid rgb(226, 236, 240);
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
    <!-- create buttons that will manipulate the forms below on how the database will be updated. -->
        <h1>Storing Form data in Database</h1>
        <form action="books.php" method="post">
            <p>
                <label for="TITLE">Title: </label>
                <input type="text" name="TXT_TITLE" id="TITLE">
            </p>
            <p>
                <label for="AUTHOR">Author: </label>
                <input type="text" name="TXT_AUTHOR" id="AUTHOR">
            </p>
            <p>
                <label for="COPYRIGHT_YEAR">Copyright Year : </label>
                <input type="text" name="NO_COPYRIGHT_YEAR" id="COPYRIGHT_YEAR">
            </p>
            <p>
                <label for="PUBLICATION">Publication: </label>:</label>
                <input type="text" name="TXT_PUBLICATION" id="PUBLICATION">
            </p>
            <p>
                <label for="CALL_NUMBER">Call Number:</label>
                <input type="text" name="TXT_CALL_NUMBER" id="CALL_NUMBER">
            </p>
            <p>
                <label for="NO_OF_COPIES">Number of Copies:</label>
                <input type="text" name="NO_NO_OF_COPIES" id="NO_OF_COPIES">
            </p>
            <p>
                <input type="submit" formaction="add.php" value="Add Book">
                <input type="submit" formaction="delete.php" value="Delete Book">
                <input type="submit" formaction="edit.php" value="Edit Book">
                <input type="submit" formaction="show.php" value="Show Book">
            </p>
        </form>
        <br><br>

        
    </body>

</html>