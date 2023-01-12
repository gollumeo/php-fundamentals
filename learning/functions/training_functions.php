<?
function capitalize($name)
{
    echo ucfirst($name);
}
$word_to_capitalize = "allô";
capitalize($word_to_capitalize);
echo "<br><br>";

echo date('Y');

echo "<br><br>";

echo date('d/m/Y h:i:s');

echo "<br><br>";

function sum($a, $b)
{


    if (is_numeric($a) and is_numeric($b)) {
        echo $a + $b;
    } else {
        echo "Error: this is not a number.";
    }
}

sum(4, 4);

echo "<br><br>";

function acronym($string)
{
    $words = explode(" ", $string);
    $acronym = "";

    foreach ($words as $w) {
        $acronym .= substr($w, 0, 1);
    }

    echo $acronym;
}

acronym("In Code We Trust !");

echo "<br><br>";

function letter_replace($combo, $replace, $string)
{
    echo str_replace($replace, $combo, $string);
}

letter_replace("æ", "ae", "caecotrophie");

echo "<br><br>";

function reverse_replace($combo, $replace, $string)
{
    echo str_replace($replace, $combo, $string);
}
reverse_replace("ae", "æ", "caecotrophie");

function feedback($innertext, $class)
{
    return '<div class ="' . $class . '">' . ucfirst($class) . ': ' . $innertext . '. </div>';
}

echo feedback("Submit every field", "notice");

echo "<br><br>";

function generateWord($minLength, $maxLength)
{
    $word = "";
    $length = rand($minLength, $maxLength);
    for ($i = 0; $i < $length; $i++) {
        $word .= chr(rand(97, 122));
    }
    return $word;
}

// Generate the two words
$shortWord = generateWord(1, 5);
$longWord = generateWord(7, 15);

// Display the words
echo "<br>Short word: " . $shortWord;
echo "<br>Long word: " . $longWord;
?>
<form>
    <input type="submit" value="Generate">
</form>
<br><br>

<? 
function decapitalize($string) {
    $smol_string = strtolower($string);
    echo $smol_string;
}

decapitalize("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

echo "<br><br>";


function calculate_cone_volume($radius, $height, $metrics) {
    echo "This cone's radius is, with a radius of " .$radius. " " .$metrics. " and a height of ".$height. " ".$metrics.", " .round((1/3) * pi() * pow($radius, 2) * $height,2). " ".$metrics."3.";
}

echo calculate_cone_volume(15, 3, "cm");