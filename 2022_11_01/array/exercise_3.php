<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
$user_choice = readline("-> ");

$compare = [];
for ($i = 0; $i < count($numbers); $i++) {
    if ($user_choice == $numbers[$i]) {
        $compare[] = $numbers[$i];
    }
}

echo empty($compare) ? "not contain" . PHP_EOL : "contain" . PHP_EOL;
//todo check if an array contains a value user entered