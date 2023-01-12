<?

$string = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

function shuffling_words($message)
{
    $exploded_array = explode (' ', $message);
    $array = [];
    foreach ($exploded_array as $words) {
        if (strlen($words) < 3) {
            $array[] = $words;
        } else {
            $array[] = substr($words, 0, 1) . str_shuffle(substr($words, 1, -1)) . substr($words, -1);
        }


        
    }
    return join(' ', $array);
}

echo shuffling_words($string);
