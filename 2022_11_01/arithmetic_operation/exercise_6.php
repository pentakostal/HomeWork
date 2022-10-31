<?php
$n = 110;
$complete = [];

for ($i = 1; $i <= $n; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        $complete[] = "CozaLoza";
    } elseif ($i % 5 === 0) {
        $complete[] = "Loza";
    } elseif ($i % 7 === 0) {
        $complete[] = "Woza";
    } elseif ($i % 3 === 0) {
        $complete[] = "Coza";
    } else {
        $complete[] = $i;
    }
}

$number = 0;
while($number <= $n - 1)
{
    for ( $i = 1;$i <= 11;$i++)
    {
        echo " " . $complete[$number];
        $number++;
    }
    echo "\n";
}
