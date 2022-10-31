<?php
$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
foreach ($person as $key => $value)
{
    var_dump($person[$key]);
}
