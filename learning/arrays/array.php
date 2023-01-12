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