<?php
$fruits = [
    [
        "name" => "banana",
        "weight" => 18
    ],
    [
        "name" => "mango",
        "weight" => 2
    ],
    [
        "name" => "peach",
        "weight" => 10
    ],
    [
        "name" => "orange",
        "weight" => 25
    ],
    [
        "name" => "watermelon",
        "weight" => 8
    ]
];
//var_dump($fruits);
function weightCheck($fruits)
{
    $shipping_costs = [];
    foreach ($fruits as $fruit) {
        if ($fruit["weight"] > 10) {
            $shipping_costs[$fruit["name"]] = $fruit["weight"] * 2;
        } else {
            $shipping_costs[$fruit["name"]] = $fruit["weight"];
        }
    }
    foreach ($shipping_costs as $key => $value) {
        echo "Shiping for " . $key . " will cost " . $value . " euros" . PHP_EOL;
    }
}

weightCheck($fruits);
