<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who am I?</title>
</head>

<body>
    <?php
    $name = "Pierre";
    $age = 25;
    $eyes = "blue";
    $family = array(
        0 => "Jean-Claude",
        1 => "Justine",
        2 => "Natacha",
        3 => "Patrick",
        4 => "Mathias",
        5 => "Josette",
    );
    ?>

    <p>Hi! My name is <?php echo $name ?></p>
    <p>I'm <? echo $age ?> years old.</p>
    <p>My eyes are supposed to be <? echo $eyes ?>.</p>
    <p>The first person in my family is <? echo $family[0] ?>.</p>
</body>

</html>