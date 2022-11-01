<?php
$day = readline("Enter number of the day: ");
switch ($day) {
    case 1:
        echo "Monday" . PHP_EOL;
        break;
    case 2:
        echo "Tuesday" . PHP_EOL;
        break;
    case 3:
        echo "Wednsaday" . PHP_EOL;
        break;
    case 4:
        echo "Thursday" . PHP_EOL;
        break;
    case 5:
        echo "Friday" . PHP_EOL;
        break;
    case 6:
        echo "Saturday" . PHP_EOL;
        break;
    case 7:
        echo "Sunday" . PHP_EOL;
        break;
    default:
        echo "Invalid number" . PHP_EOL;
}