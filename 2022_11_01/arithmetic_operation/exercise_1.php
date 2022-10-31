<?php
$num_one = 8;
$num_two = 7;

function checkNumbers($first, $second)
{
    if ($first === 15 || $second === 15) {
        return "true";
    } else {
        return $first + $second === 15 || abs($first - $second) === 15 ? "true" : "false";
    }
}

echo checkNumbers($num_one, $num_two);