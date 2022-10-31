<?php
//Person (requester).
$person = new stdClass();
$person->name = "Carl Johnson";
$person->validLicenses = ["B", "A"];
$person->cash = 3000;

/*$person = new stdClass();
$person->name = readline("Enter name: ");
echo "Licenses can be: a, b and c." . PHP_EOL;
$person->validLicenses = explode(" ", strtoupper(readline("Enter licenses: ")));
$person->cash = readline("Cash: ");*/

//Gun store database.
$gun[] = (object) array("licenseLetter" => "A", "price" => 3000, "name" => "AK-47");
$gun[] = (object) array("licenseLetter" => "B", "price" => 1000, "name" => "S&W 1911 E-series");
$gun[] = (object) array("licenseLetter" => "C", "price" => 500, "name" => "Ruger Sr1911");
$gun[] = (object) array("licenseLetter" => "C", "price" => 200, "name" => "TT");
$gun[] = (object) array("licenseLetter" => "C", "price" => 120, "name" => "PM");

//Checking customer.
function checkCustomer($person, $gun)
{
    $filter = [];
    for ($y = 0; $y < count($gun); $y++) {
        for ($i = 0; $i < count($person->validLicenses); $i++) {
            if ($person->validLicenses[$i] == $gun[$y]->licenseLetter && $person->cash >= $gun[$y]->price) {
                $filter[] = $gun[$y]->name;
            }
        }
    }
    if (empty($filter)) {
        echo $person->name . " can't buy a weapon." . PHP_EOL;
    } else {
        echo $person->name . " can buy:" . PHP_EOL;
        for ($f = 0; $f < count($filter); $f++) {
            echo $filter[$f] . PHP_EOL;
        }
    }
}

checkCustomer($person, $gun);


