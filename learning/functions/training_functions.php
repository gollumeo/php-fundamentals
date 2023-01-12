<? 
function capitalize($name) {
    echo ucfirst($name);
}
$word_to_capitalize = "allô";
capitalize($word_to_capitalize);
echo "<br><br>";

echo date('Y');

echo "<br><br>";

echo date('d/m/Y h:i:s');

echo "<br><br>";

function sum($a, $b) {


if (is_numeric($a) AND is_numeric($b)) {
    echo $a + $b;
} else {
    echo "Error: this is not a number.";
}
}

sum(4, 4);

echo "<br><br>";

function acronym($string) {
    $words = explode(" ", $string);
    $acronym = "";

    foreach ($words as $w) {
        $acronym .= substr($w, 0, 1);
    }

    echo $acronym;
}

acronym("In Code We Trust");
