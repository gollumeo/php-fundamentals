<?
$weekday = date("l");
$day = date("d");
$month = date("m");
$month_name = date("F", mktime(0, 0, 0, $month, 10));

switch ($day) {
    case '1':
        $end = "st";
        break;

    case '2':
        $end = "sd";
        break;

    case '3':
        $end = "rd";

    default:
        $end = "th";
        break;
}

$full_date = $weekday . ", the " . $day . $end . " of " . $month_name;

if (isset($_GET['child_name'], $_GET['teacher_name'], $_GET['child_gender'], $_GET['reason']) and $_GET['reason'] != "") {

    $child_name = $_GET['child_name'];
    $teacher_name = $_GET['teacher_name'];
    $reason = $_GET['reason'];

    $illness = [
        0 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days due to illness. " . $child_name . " has been diagnosed with (name of illness) and must undergo medical treatment to recover.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation, and we will do our best to minimize disruptions. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes.<br><br>

    We apologize for any inconvenience caused and thank you for your understanding in these difficult circumstances.<br><br>

    Sincerely,<br>
    His father",

        1 => "Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " was absent from school the next few days due to illness. " . $child_name . " has been diagnosed with gastro and has been advised to stay home to rest and recover.<br><br>

    We understand that " . $child_name . "'s absence may have an impact on his/her studies and class participation. We will do our best to help " . $child_name . " catch up on missed classes and continue studies with minimal disruptions.<br><br>

    We apologize for any inconvenience caused and thank you for your understanding.<br><br>

    Sincerely,<br>
    His father",

        2 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days due to illness. " . $child_name . " has caught rhino-pharyngitis and has been advised to stay home to recover fully.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Thank you for your understanding in these difficult circumstances and we hope " . $child_name . " will recover soon.<br><br>

    Sincerely,<br>
    His father",

        3 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days due to illness. " . $child_name . " has been diagnosed with bronchitis and must undergo medical treatment to recover.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Thank you for your understanding in these difficult circumstances.<br><br>

    Sincerely,<br>
    His father",

        4 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days due to illness. " . $child_name . " has been diagnosed with sinusitis and must undergo medical treatment to recover fully.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Thank you for your understanding in these difficult circumstances and we hope " . $child_name . " will recover soon.<br><br>

    Sincerely,<br>
    His father"

    ];

    $death = [
        0 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days due to the death of his grand-father who is a close family member.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        1 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days due to the loss of Georges, his hamster, who was a beloved family member.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        2 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days due to the death of his cousin who was a distant family member and was very dear to " . $child_name . ".<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        3 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days due to the loss of Poupousse who was a beloved family member. We apologize for any inconvenience caused and hope for your understanding.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        4 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days due to the death of his grand mother who is a close family member and was very dear to " . $child_name . ".<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father"

    ];
    $extra_curricular = [
        0 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days for participating in a science fair held at Brussels. The competition is very important to " . $child_name . " and participation will encourage the passion for science.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        1 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days for participating in a equestrian tournament held at Andenne. The tournament is very important to " . $child_name . " and participation will help to continue developing the passion for equestrianism.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        2 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days for participating in a music competition held at Charleroi. The competition is very important to " . $child_name . " and participation will continue to develop passion for music.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        3 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days for participating in a theater workshop held at Strasbourg. This experience is very important for " . $child_name . " and participation will continue to develop the artistic talents.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        4 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school the next few days for participating in a sports competition held at Jambes. The competition is very important to " . $child_name . " and participation will continue to develop sports talents.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We commit to providing all necessary information for " . $child_name . " to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father"
    ];
    $rwf = [
        0 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school for the two next weeks for participating in the Race to World First event for World of Warcraft. This event is of great importance to " . $child_name . " as it allows them to push their limits and test their skills against other top players from around the world.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We will ensure that " . $child_name . " has all the necessary materials to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        1 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school for the next few weeks for participating in the Race to World First event for World of Warcraft. This event is a unique opportunity for " . $child_name . " to showcase their talents and prove their abilities in the gaming community.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We will make sure that " . $child_name . " is provided with all the necessary resources to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        2 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school for the next days for participating in the Race to World First event for World of Warcraft. This event is of great importance to " . $child_name . " as it is an unique opportunity for them to work with other top players in the game, and challenge themselves to improve their gameplay skills.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We will make sure that " . $child_name . " is provided with all the necessary resources to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        3 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school on (dates of absence) for participating in the Race to World First event for World of Warcraft. This event is very important to " . $child_name . " as it allows them to be part of a team, with the opportunity to work together to achieve the world first clear on a raid.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We will ensure that " . $child_name . " has all the necessary materials to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",

        4 => "<span class='date'>" . $full_date . "</span>Dear " . $teacher_name . ",<br><br>

    I am writing to inform you that " . $child_name . " will be absent from school on (dates of absence) for participating in the Race to World First event for World of Warcraft. This event is of great importance to " . $child_name . " as it is an opportunity to showcase their knowledge and strategies of the game in a competitive environment.<br><br>

    We understand that this absence may impact " . $child_name . "'s studies and class participation and we apologize for any inconvenience caused. We will make sure that " . $child_name . " is provided with all the necessary resources to catch up on missed classes as soon as possible.<br><br>

    Sincerely,<br>
    His father",
    ];

    switch ($reason) {
        case 'illness':
            $letter_to_display = $illness[rand(0, 4)];
            echo $letter_to_display;
            break;
        case 'death':
            $letter_to_display = $death[rand(0, 4)];
            echo $letter_to_display;

            break;
        case 'extra_curricular':
            $letter_to_display = $extra_curricular[rand(0, 4)];
            echo $letter_to_display;

            break;
        case 'rwf':
            $letter_to_display = $rwf[rand(0, 4)];
            echo $letter_to_display;

            break;
        default:
            echo "Please provide a correct reason!";
    }
}
