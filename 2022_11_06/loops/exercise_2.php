<?php
$number=(int) readline("Input number of terms: ");
$numberCollect=$number;
for ($i=0; $i<$number; $i++) {
    $numberCollect *= $number;
}
echo $numberCollect.PHP_EOL;