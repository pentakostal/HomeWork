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

foreach ($items as $person)
{
    foreach ($person as $key)
    {
        $names[] = $key["name"];
        $surnames[] = $key["surname"];
    }
}

if ($surnames[0] === $surnames[1])
{
    echo $names[0] . " & " . $names[1] . " " . $surnames[0] . "'s";
}
