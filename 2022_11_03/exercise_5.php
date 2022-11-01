<?php
$str = strtoupper(readline("Enter string: "));
$str_mod = explode(" ", $str);
$number_collection = [];

function deCode($str_mod)
{
    $number_collection = [];
    foreach ($str_mod as &$value) {
        switch ($value) {
            case "A":
            case "B":
            case "C":
                array_push($number_collection, 2);
                break;
            case "D":
            case "E":
            case "F":
                array_push($number_collection, 3);
                break;
            case "G":
            case "H":
            case "I":
                array_push($number_collection, 4);
                break;
            case "J":
            case "K":
            case "L":
                array_push($number_collection, 5);
                break;
            case "M":
            case "N":
            case "O":
                array_push($number_collection, 6);
                break;
            case "P":
            case "Q":
            case "R":
            case "S":
                array_push($number_collection, 7);
                break;
            case "T":
            case "U":
            case "V":
                array_push($number_collection, 8);
                break;
            case "W":
            case "X":
            case "Y":
            case "Z":
                array_push($number_collection, 9);
                break;
        }
    }
    return $number_collection;
}

if (count($str_mod) > 1) {
    $x = [];
    foreach ($str_mod as &$value) {
        $y = str_split($value);
        array_push($x, deCode($y));
    }
    //var_dump($x);
    foreach ($x as &$value) {
        echo implode($value) . " ";
    }
    echo PHP_EOL;
} else {
    $df = str_split($str_mod[0]);
    echo implode(deCode($df)) . PHP_EOL;
}

