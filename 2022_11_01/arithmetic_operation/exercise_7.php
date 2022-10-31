<?php
$acceleration = -9.81;
$time = 10;
$start_speed = 0;
$start_position = 0;

$formula = 0.5 * ($acceleration * pow($time, 2)) + ($start_position * $time) + $start_position;

echo "After falling for ${time} seconds, object position is " . $formula . " m" . PHP_EOL;
//abs(formula)