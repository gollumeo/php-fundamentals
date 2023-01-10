<?
echo "1.1 Clean your room Exercise<br>";
$room_is_filthy = true;

if ($room_is_filthy = false) {
    echo "Yuk, Room is dirty : let's clean it up !<br>";
    // cleanup_room();
    echo "<br>Room is now clean!<br>";
    $room_is_filthy = false;
} else {
    echo "<br>Nothing to do, room is neat.<br>";
}

echo "<br>1.2 Clean your room Exercise, improved<br>";

// Listing every possible states

$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// Testing here

$room_filthiness = $possible_states[2];

if ($room_filthiness == $possible_states[0] or $room_filthiness == $possible_states[1]) {
    echo "<br>Yuk, Room is Disgusting! Let's clean it up !<br>";
} else if ($room_filthiness == $possible_states[2]) {
    echo "<br>Yuk, Room is dirty : let's clean it up !<br>";
} else {
    echo "<br>Nothing to do, room is neat.<br>";
}

echo "<br> 2. 'Different greetins according to time' Exercise<br>";

date_default_timezone_set('Europe/Brussels');
$now = date('h:i');

if ($now >= "05:00" and $now <= "09:00") {
    echo "<br>Good morning!<br>";
} else if ($now > "09:00" and $now <= "12:00") {
    echo "<br>Good day!<br>";
} else if ($now > "12:00" and $now <= "16:00") {
    echo "<br>Good afternoon!<br>";
} else if ($now > "16:00" and $now <= "21:00") {
    "<br>Good evening!<br>";
} else {
    echo "<br>Good night!<br>";
}

echo "<br>3. 'Different greetings according to stuff' Exercise<br>"; ?>
<br>
<form action="" method="get">
    <label for="age">How old are you?</label>
    <input type="text" name="age" required><br>
    <label for="gender">Man or woman?</label>
    <input type="radio" name="gender" value="female" required><label for="female">Female</label>
    <input type="radio" name="gender" value="male" required><label for="male">Male</label><br>
    <label for="lang">English speaker?</label>
    <input type="radio" name="lang" value="yes" required><label for="yes">Yes</label>
    <input type="radio" name="lang" value="no" required><label for="no">No</label><br>

    <input type="submit" name="submit" value="Greet me now">
</form>

<?
if (isset($_GET['age']) and isset($_GET['gender']) and isset($_GET['lang'])) {
    if ($_GET['lang'] == "yes") {
        $greeting = "Hello";
    } else {
        $greeting = "Aloha";
    }

    if ($_GET['age'] < 12) {
        if ($_GET['gender'] == "male") {
            echo "<br>" . $greeting . " Mister Teen!<br>";
        } else {
            echo "<br>" . $greeting . " Miss Teen!<br>";
        }
    } else if ($_GET['age'] >= 12 and $_GET['age'] < 18) {
        if ($_GET['gender'] == "male") {
            echo "<br>" . $greeting . " Mister Teenager!<br>";
        } else {
            echo "<br>" . $greeting . " Miss Teenager!<br>";
        }

    } else if ($_GET['age'] >= 18 and $_GET['age'] < 115) {
        if ($_GET['gender'] == "male") {
            echo "<br>" . $greeting . " Mister!<br>";
        } else {
            echo "<br>" . $greeting . " Miss!<br>";
        }

    } else {
        echo "<br>Wow! Still, alive? Are you a robot, like me? Can I hug you?<br>";
    }

}

echo "<br>6. 'The Girl Soccer Team' Exercise<br>";
?>

<br>
<form action="" method="get">
    <label for="team_name">What's your name?</label>
    <input type="" name="team_name" required><br>
    <label for="team_age">How old are you?</label>
    <input type="number" name="team_age"><br>
    <label for="team_gender">Gender?</label>
    <input type="radio" name="team_gender" value="female" required><label for="female">Female</label>
    <input type="radio" name="team_gender" value="male" required><label for="male">Male</label><br>
    <input type="submit" name="submit" value="Apply to the team">
</form>

<?

if (isset($_GET['team_name']) and isset($_GET['team_age']) and isset($_GET['team_gender'])) {
    $name = $_GET['team_name'];
    $age = $_GET['team_age'];
    $gender = $_GET['team_gender'];
    $able_to_play = false;
    $alert = "Sorry, you don't fit the criteria.<br>";

    if ($age >= 21 and $age <= 40 and $gender == "female") {
        $able_to_play = true;
    }

    if ($able_to_play == true) {
        $alert = "Welcome to the team, " . $name . "!<br>";
    }

    echo $alert;
}

echo "<br>'School sucks!' Exercise<br>";
?>
<br>
<form action="" method="get">
    <label for="grade">Boring grade:</label>
    <input type="number" name="grade" required><br>
    <input type="submit" name="submit" value="Rate that...">
</form>

<?

if (isset($_GET['grade'])) {
    $grade = $_GET['grade'];

    if ($grade < 4) {
        echo "<br>This work is really bad. What a dumb kid!";
    } else if ($grade >= 5 AND $grade <= 9) {
        echo "<br>This is not sufficient. More studying is required.";
    } else if ($grade == 10) {
        echo "<br>Barely enough!";
    } else if ($grade > 10 AND $grade <= 14) {
        echo "<br>Not bad!";
    } else if ($grade > 14 AND $grade <= 18) {
        echo "<br>Bravo, Bravissimo!";
    } else if ($grade == 19 or $grade == 20) {
        echo "<br>Too good to be true: confront the cheater!";
    }
}