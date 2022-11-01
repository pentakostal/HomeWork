<?php
$number = readline("Enter the number: ");
if ($number > 0) {
    echo "Number is positive" . PHP_EOL;
} elseif ($number < 0) {
    echo "Number is negative" . PHP_EOL;
} else {
    echo "Number is zero" . PHP_EOL;
}