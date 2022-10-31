<?php
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

foreach ($person as $key => $value)
{
    var_dump($value);
}