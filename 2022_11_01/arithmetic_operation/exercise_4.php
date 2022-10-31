<?php
$numbers = range(1, 10);
$counter = count($numbers);
$point = 1;

for ($i = $counter; $i >= 1; $i--) {
    $point *= $i;
}

echo $point . PHP_EOL;