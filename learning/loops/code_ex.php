<?
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');


foreach ($pronouns as $pronoun) {
    switch ($pronoun) {
        case 'He/She':
            echo $pronoun . " codes<br>";
            break;
        default:
            echo $pronoun . " code<br>";
    }
}
