<?php
require_once 'FuelGauge.php';
require_once 'Odometer.php';

$fuelGauge = new FuelGauge(5);
$odometer = new Odometer(999989);

//var_dump($fuelGauge);
//var_dump($odometer);
$index = 0;
while ($fuelGauge->getAmount() > 0) {
    //Driving
    echo "We drove 1 km".PHP_EOL;
    $odometer->increaseMileage();
    echo $odometer->getMileage() .PHP_EOL;
    $index++;
    //Fuel consumtion
    if($index % 10 === 0) {
        $fuelGauge->use(1);
        echo "Remove 1 liter.".PHP_EOL;
    }
    //Check fuel tank
    if($fuelGauge->getAmount() == 0){
        echo "You are out of fuel".PHP_EOL;
        break;
    }
    sleep(1);
}