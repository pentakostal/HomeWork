<?php
$my_numbers = [
    2,
    23,
    854,
    33,
    3,
    76,
    8584,
    465,
    9,
    63,
    23853
];

foreach ($my_numbers as $my_number)
{
    if (!($my_number % 3)) {
        echo $my_number . PHP_EOL;
    }
}