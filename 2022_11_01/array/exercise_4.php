<?php
$total_orig = range(1, 10);
for ($i = 0; $i < count($total_orig); $i++) {
    $total_orig[$i] = rand(1, 100);
}

$total_copy = range(1, 10);
for ($y = 0; $y < count($total_orig); $y++) {
    $total_copy[$y] = $total_orig[$y];
}

$total_orig[count($total_orig) - 1] = -7;

echo "Array 1: " . implode(", ", $total_orig) . PHP_EOL;
echo "Array 2: " . implode(", ", $total_copy) . PHP_EOL;