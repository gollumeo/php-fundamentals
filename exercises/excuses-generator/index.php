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
        <form action="" method="get" id="form">
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
        <form action="index.php"><input type="submit" value="Cancel" id="reload"></form>
    </div>



    <div class="excuses">
        <p>
            <span id="placeholder">Your excuse will be displayed here.</span>

            <script>
                let form = document.getElementById("form");
                form.addEventListener("submit", (event) => {
                    event.preventDefault();
                    document.getElementById("placeholder").style.display = "none";
                })
                </script>
                <? include './assets/php/letters.php'; ?>
        </p>

    </div>
    <div class="footer">
        <footer>
            <p>© Pierre "Golluméo" Mauriello (BeCode | Keller 5) - All Rights Reserved.</p>
        </footer>
    </div>

</body>


</html>