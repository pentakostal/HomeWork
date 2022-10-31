<?php
$person_height = readline("Enter your height in cm: ");
$person_weight = readline("Enter your weight in kg: ");

function convertHeight($unit_h)
{
    return $unit_h * 0.393701;
}

function convertWeight($unit_w)
{
    return $unit_w * 2.2;
}

$person_height = round(convertHeight($person_height));
$person_weight = round(convertWeight($person_weight));

$bmi = $person_weight * 703 / pow($person_height, 2);
$bmi = number_format($bmi, 1, ".", "");
echo "BMI is ${bmi}" . PHP_EOL;

if ($bmi < 18.5) {
    echo "Person is underweight" . PHP_EOL;
} elseif ($bmi > 25) {
    echo "Person is overweight." . PHP_EOL;
} else {
    echo "Person is optimal." . PHP_EOL;
}

