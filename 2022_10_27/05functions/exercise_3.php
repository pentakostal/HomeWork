<?php
$person = new stdClass();
$person->name = readline("Name: ");//"Dante";
$person->surname = readline("Surname: ");//"Alighieri";
$person->age = readline("Age: ");//25;
function checkAge($person)
{
    if ($person->age >= 18) {
        return $person->name . " " . $person->surname . " have reached 18 years of age." . PHP_EOL;
    } else {
        return $person->name . " " . $person->surname . " have not reached 18 years of age." . PHP_EOL;
    }
}

echo checkAge($person);
