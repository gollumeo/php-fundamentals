<?

$me = [
    'age' => 26,
    'firstname' => 'Pierre',
    'lastname' => 'Mauriello',
    'fav_movies' => ['Harry Potter', 'The Lord of The Rings', 'Percy Jackson']
];

echo '<pre>';
print_r($me);
echo '</pre>';

$me['hobbies'][] = "Coding";
$me['hobbies'][] = "World of Warcraft";

print_r($me);

$mother = [
    'age' => 51,
    'firstname' => 'Natacha',
    'lastname' => 'Riquet',
    'fav_movies' => ['Harry Potter', 'Dirty Dancing', 'Agatha Christie']
];

$mother['hobbies'][] = "Sewing";
$mother['hobbies'][] = "Cooking";
echo "<br><br>";
print_r($mother);

$me['mother'] = $mother;

echo '<pre>';
print_r($me);
echo '</pre>';

echo "My mother has " . count($mother['hobbies']) . " hobbies.<br>";
echo "I have " . count($me['hobbies']) . " hobbies.<br>";
echo "We both have " . count($mother['hobbies']) + count($me['hobbies']) . " hobbies<br>";

$me['hobbies'][] = "Taxidermy";

$me['lastname'] = "Durand";
print_r($me['lastname']);

$soulmate = [
    'age' => 27,
    'firstname' => 'Justine',
    'lastname' => 'Frigo',
    'fav_movies' => ['PS: I Love You', 'Dirty Dancing', 'Percy Jackson']
];

$soulmate['hobbies'][] = "Video games";
$soulmate['hobbies'][] = "World of Warcraft";
$soulmate['hobbies'][] = "Taxidermy";

$intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$merge = array_merge($me['hobbies'], $soulmate['hobbies']);

echo "<pre>";
print_r($intersection);
print_r($merge);
echo "</pre>";

echo "<br><br>Another exercise<br>";
$web_development = [
    'frontend' => [],
    'backend' => []
];

$web_development['frontend'][] = 'xhtml';
echo "<pre>";
print_r($web_development);
$web_development['backend'][] = "Ruby on Rails";
print_r($web_development);
$web_development['frontend'][] = "CSS";
print_r($web_development);
$web_development['backend'][] = "Flash";
print_r($web_development);
$web_development['frontend'][] = "Javascript";
print_r($web_development);
$web_development['frontend'][0] = "html";
print_r($web_development);
array_splice($web_development['backend'], 1);
print_r($web_development);
echo "</pre>";