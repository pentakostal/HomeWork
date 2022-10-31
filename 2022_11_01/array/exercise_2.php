<?php
$numbers = [20, 30, 25, 35, -16, 60, -100];

function averageOf ($numbers)
{
    $sum = array_sum($numbers);
    $counter = count($numbers);
    $average = $sum / $counter;
    return number_format($average, 2, ".", "");
}

echo averageOf($numbers)  . PHP_EOL;
//todo calculate an average value of the numbers