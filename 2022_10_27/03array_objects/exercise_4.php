<?php
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

//var_dump($items[0][1]["name"]);
//echo $items[0][1]["name"] . " " . $items[0][1]["surname"] . " " . $items[0][1]["age"];

$items_mod = $items[0][1];
foreach ($items_mod as $key => $value)
{
    echo $value . " ";
}