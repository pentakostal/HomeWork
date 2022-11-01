<?php
$numbers[] = $number_one = readline("Input the 1st number: ");
$numbers[] = $number_two = readline("Input the 2nd number: ");
$numbers[] = $number_three = readline("Input the 3rd number: ");
rsort($numbers);
echo "The largest number is " . $numbers[0];
