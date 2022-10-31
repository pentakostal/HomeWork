<?php
$people = [
    [
        "name" => "John",
        "surname" => "Travolta",
        "age" => "53",
        "birthday" => "24 august"
    ],
    [
        "name" => "Liza",
        "surname" => "Ann",
        "age" => "43",
        "birthday" => "15 september"
    ],
    [
        "name" => "Alee",
        "surname" => "Big",
        "age" => "28",
        "birthday" => "1 june"
    ]
];

for ($i = 0; $i < count($people); $i++)
{
    echo $people[$i]["name"] . " " . $people[$i]["surname"] . " age is " . $people[$i]["age"] . " birthday is " . $people[$i]["birthday"] . PHP_EOL;
}
