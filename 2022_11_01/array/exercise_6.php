<?php
//Library
$word_library = [
    "cat",
    "apple",
    "alienware",
    "asus",
    "watermelon"
];
//Checking letter in searched word and return index(key)
function getKey($letter, $word_to_guess)  {
    $letter_answer = [];
    foreach($word_to_guess as $key => $value) {
        if ($letter === $value) {
            $letter_answer[] = $key;
        }
    }
    return $letter_answer;
}
//Game mechanic
//Pc choose word from library array
$index = rand(0, count($word_library) - 1);
$word_to_guess = str_split($word_library[$index]);
//Create players board
$secret = array_fill(0, count($word_to_guess), "_");
//Cycle
$misses = [];
for ($i = 0; $i < count($word_to_guess) + 3; $i++) {
    //Checking tries
    /*if ($i == count($word_to_guess) + 3) {
        echo "You are out of tries." . PHP_EOL;
        echo "Play 'again' or 'quit'?" . PHP_EOL;
        $round = readline("-> ");
    }*/
    $letter = readline("Enter letter: " . PHP_EOL);
    $letter_answer = getKey($letter, $word_to_guess);
    if (count($letter_answer) == 1) {
        $secret[$letter_answer[0]] = $letter;
    } elseif (count($letter_answer) > 1) {
        for ($y = 0; $y < count($letter_answer); $y++) {
            $secret[$letter_answer[$y]] = $letter;
        }
    } elseif (count($letter_answer) == 0) {
        array_push($misses, $letter);
    }
    //Win statement
    if ($secret == $word_to_guess) {
        echo implode(" ", $secret) . PHP_EOL;
        exit("YOU GOT IT!" . PHP_EOL);
    }
    echo implode(" ", $secret) . PHP_EOL;               //Display
    echo "Misses: " . implode("", $misses) . "\n\n";
}
echo "You are out of tries." . PHP_EOL;

