<? 
$i = 1;
while ($i <= 120) {
    echo $i . ' ';
    $i++;
}

for ($i = 1; $i <= 120; $i++) {
    echo $i . ' ';
}

$becode = [
    'Pierre N.', 'Laura V.', 'Corentin', 'Mathilde', 'Nour', 'Milo', 'Céline', 'Nathalie G.', 'Nathalie V.', 'Virginie', 'Jonathan B.', 'Benjamin', 'Aurore', 'Pierre M.', 'Jonathan M.', 'Marnie', 'Aurélien', 'Lysie', 'Edouard', 'Quentin', 'Hugo', 'Arno', 'Dominique', 'Laura W.' 
];
echo '<br>';

foreach ($becode as $student) {
    echo $student . '<br>';
}

$countries = [
    'select' => 'Select a country',
    'FR' => 'France', 
    'BE' => 'Belgium',
    'DE' => 'Germany',
    'UK' => 'United Kingdom',
    'BR' => 'Brazil',
    'US' => 'United States',
    'LU' => 'Luxemburg',
    'RU' => 'Russia',
    'ES' => 'Spain',
    'CH' => 'Swiss'
];

echo "<select>";
foreach ($countries as $key => $value) {
    echo "<option value =".$key.">".$value."</option>";
}
echo "</select>";