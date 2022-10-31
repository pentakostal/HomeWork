<?php
$number_pc = rand(1, 100);
echo "I'm thinking of a number between 1-100.  Try to guess it." . PHP_EOL;
$number_user = readline("> ");

if ($number_pc > $number_user) {
    echo "Sorry, you are too low.  I was thinking of " . $number_pc . PHP_EOL;
} elseif ($number_pc < $number_user) {
    echo "Sorry, you are too high.  I was thinking of " . $number_pc . PHP_EOL;
} else {
    echo "You guessed it!  What are the odds?!?";
}




