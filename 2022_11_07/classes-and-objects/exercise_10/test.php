<?php
//For debug and checking
require_once 'Video.php';
require_once 'VideoStore.php';

$program = new VideoStore();
$program->addVideo("The Matrix");
$program->addVideo("Reservoir Dogs");
$program->addVideo("Godfather II");
$program->addVideo("Stars Wars Episode IV: A New Hope");
$program->addVideo("Pulp Fiction");


//echo $program->listVideo() . PHP_EOL;
$program->signRating("The Matrix", 9.5);
$program->checkOutStore("The Matrix");
$program->returneToStore("The Matrix");
echo $program->listVideo() .  PHP_EOL;

