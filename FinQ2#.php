<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Exam</title>
    <style>

        .default {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            margin: 0px auto;
            margin-top: 10px;
            margin-bottom: 10px;
        }

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
            border: 0px solid #3F403F;
            border-collapse: collapse;
            padding: 5px;
        }

        body {
            background-color: #9fb8ad;
            font-family: Tahoma;
        }


        div {
            /* center the div */
            margin: 0 auto;
            width: 50%;
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
            width: 90%;
        }

        /* h3 {
            font: optional;;
        } */
    </style>
</head>

<body>
    <table class="default">
        <tr class="default">
            <th class="default">
                Name:
            </th>
            <td class="default">
                MALICSI, RAIN DAVID P.
            </td>
            <th class="default">
                Topics
            </th>
            <td class="default">
                Midterm
            </td>
        </tr>
        <tr class="default">
            <th class="default">Exam</th>
            <td class="default">Midterm Examination</td>
            <th class="default">Date</th>
            <td class="default">06/30/2025</td>
        </tr>
    </table>

    
<div>
    <h3>Contact Information</h3>
     <table class="form-table">
        <form action="FinQ2#.php">
            <tr>
                <td>
                    First Name:
                </td>
                <td>
                    <input type="text" name="txt_first_name" id="firstName" placeholder="First Name *">
                </td>
            </tr>
            <tr>
                <td>
                    Last Name:
                </td>
                <td>
                    <input type="text" name="txt_last_name" id="lastName" placeholder="Last Name *">
                </td>
            </tr>
            <tr>
                <td>
                    Email address:
                </td>
                <td>
                    <input type="text" name="txt_email" id="email" placeholder="e.g. malicsi.raindavid@ue.edu.ph">
                </td>
            </tr>
            <tr>
                <td>
                    Confirmation email:
                </td>
                <td>
                    <input type="text" name="txt_confirmation_email" id="confirmationEmail" placeholder="Confirm email*">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="check_updates" id="updates">
                </td>
                <td>
                    <label for="updates">Keep me updated on more events and news from the event organizer.</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="check_emails" id="emails">
                </td>
                <td>
                    <label for="emails">Send me emails about the best events happening nearby or online.</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" formaction="addParticipant.php" value="Register">
                    <input type="submit" formaction="editParticipant.php" value="Edit Response">
                    <input type="submit" formaction="deleteParticipant.php" value="Back-out">
                </td>
            </tr>
        </form>
    </table>
</div>
   
</body>

</html>