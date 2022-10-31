<?php
$num_one = readline("Enter first number: ");
$num_two = readline("Enter second number: ");
function multiPly($num_one, $num_two)
{
    return $num_one * $num_two . PHP_EOL;
}
echo multiPly($num_one, $num_two);