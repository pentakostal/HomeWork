<?php
class rollTwoDice {
    public $desiredSum;
    function __construct($desiredSum) {
        $this->desiredSum=$desiredSum;
    }
    function game() {
        while(true) {
            $diceOne=rand(1,6);
            $diceTwo=rand(1,6);
            $sum=$diceOne+$diceTwo;
            if($sum==$this->desiredSum){
                echo $diceOne." and ".$diceTwo." = ".$sum.PHP_EOL;
                break;
            } else {
                echo $diceOne." and ".$diceTwo." = ".$sum.PHP_EOL;
            }
        }
    }
}
$play = new rollTwoDice((int) readline("Enter desired sum: "));
$play->game();