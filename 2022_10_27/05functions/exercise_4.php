<?php
$people[] = (object) ["name" => "Dante", "surname" => "Alighieri", "age" => 24];
$people[] = (object) ["name" => "Pavels", "surname" => "Skokovs", "age" => 28];
$people[] = (object) ["name" => "John", "surname" => "Li", "age" => 16];

function checkAge($people)
{
    foreach ($people as $person) {
        if ($person->age >= 18) {
            echo $person->name . " " . $person->surname . " have reached 18 years of age." . PHP_EOL;
        } else {
            echo $person->name . " " . $person->surname. " have not reached 18 years of age." . PHP_EOL;
        }
    }
}

echo checkAge($people);
