<?php
class fizzBuzz {
    public $number;
    private $complete;

    function __construct($number) {
        $this->number=$number;
    }

    function fizzBuzz() {
        for ($i=1; $i <= $this->number; $i++) {
            if ($i % 15 === 0) {
                $this->complete[]="FizzBuzz";
            } elseif ($i % 3 === 0) {
                $this->complete[]="Fizz";
            } elseif ($i % 5 ===0) {
                $this->complete[]="Buzz";
            } else {
                $this->complete[]=$i;
            }
        }

        $number = 0;
        while($number < $this->number) {
            for ($z = 0;$z < 20; $z++)
            {
                if ($number > $this->number-1) {
                    break;
                }
                echo " " . $this->complete[$number];
                $number++;
            }
            echo "\n";
        }
    }
}
$logic = new fizzBuzz(readline("Enter number: -> "));
echo $logic->fizzBuzz();