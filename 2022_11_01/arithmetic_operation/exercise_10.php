<?php
class geometryCalculator {
    public static function areaCircle($radius) {
        echo "Calculate the area of the circle." . PHP_EOL;
        return $radius > 0 ? roundNumber(pi() * $radius * 2 ): "error";
    }
    public static function areaRectangle($length, $width) {
        echo "Calculate the area of rectangle." . PHP_EOL;
        return $length > 0 && $width > 0 ? roundNumber($length * $width) : "error";
    }
    public static function areaTriangle($base, $height) {
        echo "Calculate the area of triangle." . PHP_EOL;
        return $base > 0 && $height ? roundNumber($base * $height * 0.5) : "error";
    }
}

function roundNumber($number)
{
    return number_format($number, 2, ".", "");
}

echo "Geometry calculator:" . PHP_EOL;
echo "1. Calculate the Area of Circle" . PHP_EOL;
echo "2. Calculate the Area of Rectangle" . PHP_EOL;
echo "3. Calculate the Area of Triangle" . PHP_EOL;
echo "4. Quit" . PHP_EOL;
echo "\n";
$enter_choice = readline("Enter your choice (1-4): ");

switch ($enter_choice) {
    case 1:
        $radius = readline("Enter radius: ");
        echo geometryCalculator::areaCircle($radius) . PHP_EOL;
        break;
    case 2:
        $length = readline("Enter length: ");
        $width = readline("Enter width: ");
        echo geometryCalculator::areaRectangle($length, $width) . PHP_EOL;
        break;
    case 3:
        $base = readline("Enter base: ");
        $height = readline("Enter height: ");
        echo geometryCalculator::areaTriangle($base, $height) . PHP_EOL;
        break;
    case 4:
        exit("Quit" . PHP_EOL);
}