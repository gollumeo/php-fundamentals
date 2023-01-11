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
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Golluméxcuse</title>
</head>

<body>
    <div class="header">
        <h1>Welcome to <em>Golluméxcuse</em>, your brand new excuses generator!</h1>
    </div>

    <div class="form">
        <form action="./assets/php/letters.php" method="get">
            <label for="child_name">Child's name:</label>
            <input type="text" placeholder="Your child's name" name="child_name"required>
            <label for="child_gender">Child's gender:</label>
            <input type="radio" name="child_gender" value="girl" required><label for="child_gender">Girl</label>
            <input type="radio" name="child_gender" value="boy" required><label for="child_gender">Boy</label>
            <label for="teacher_name">Teacher's name:</label>
            <input type="text" placeholder="Teacher's name" name="teacher_name" required>
            <label for="reason">Reason:</label>
            <input type="radio" name="reason" value="illness" required><label for="reason">Illness</label>
            <input type="radio" name="reason" value="death" required><label for="reason">Death</label>
            <input type="radio" name="reason" value="extra_curricular" required><label for="reason">Extra-curricular</label>
            <input type="radio" name="reason" value="rwf" required><label for="reason">RWF</label>
            <input type="submit" value="Generate apology">

            blablablabla
        </form>
    </div>
</body>

</html>