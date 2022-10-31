<?php
$lower_bound = 1;
$upper_bound = 100;

$numbers = range($lower_bound, $upper_bound);
$sum = array_sum($numbers);
$average = $sum / count($numbers);

echo "The sum of ${lower_bound} and ${upper_bound} is $sum" . PHP_EOL;
echo "The average is ${average}" . PHP_EOL;