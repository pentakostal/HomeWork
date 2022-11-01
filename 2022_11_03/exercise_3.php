<?php
$number = readline("Enter number: ");
if ($number >= 0) {
    $number_split = array_map('intval', str_split($number));
    $counter = count($number_split);
    echo "Number of digits in number is " . $counter . PHP_EOL;
} else {
    echo "Number must be positive." . PHP_EOL;
}

