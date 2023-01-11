<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./assets/images/gollumeo.png" type="image/png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Golluméxcuse</title>
</head>

<body>
    <div class="header">
        <h1>Welcome to <em>Golluméxcuse</em>, your brand new excuses generator!</h1>
    </div>

    <div class="form">
        <form action="./assets/php/letters.php" method="get">
            <label for="child_name">Child's name:</label>
            <input type="text" placeholder="Your child's name" name="child_name" required><br>
            <label for="child_gender">Child's gender:</label>
            <input type="radio" name="child_gender" value="girl" required class="choice"><label for="child_gender">Girl</label>
            <input type="radio" name="child_gender" value="boy" required class="choice"><label for="child_gender">Boy</label><br>
            <label for="teacher_name">Teacher's name:</label>
            <input type="text" placeholder="Teacher's name" name="teacher_name" required><br>
            <label for="reason">Reason:</label>
            <select name="reason">
                <option value="">Select a reason</option>
                <option value="illness">Illness</option>
                <option value="death">Death</option>
                <option value="extra_curricular">Extra-curricular</option>
                <option value="rwf">RWF</option>
            </select><br>
            <input type="submit" value="Generate apology" id="submit">

        </form>
    </div>



    <div class="excuses">
        <p>
            <? include './assets/php/letters.php';
            echo $illness[0]; ?>


            <span class="date">Wednesday, the 11th of January</span>Dear Teacher,<br><br>
            I am writing to inform you that Tête de mort will be absent from school for the next few days due to illness. Tête de mort has been diagnosed with the flu and must undergo medical treatment to recover.<br>
            We understand that this absence may impact Tête de mort's studies and class participation, and we will do our best to minimize disruptions. We commit to providing all necessary information for Tête de mort to catch up on missed classes.<br>
            We apologize for any inconvenience caused and thank you for your understanding in these difficult circumstances.<br><br>

            Sincerely,<br>
            His father
        </p>

    </div>
    <div class="footer">
        <footer>
            <p>© Pierre "Golluméo" Mauriello (BeCode | Keller 5) - All Rights Reserved.</p>
        </footer>
    </div>

</body>


</html>