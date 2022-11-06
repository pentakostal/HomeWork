<?php
declare(strict_types=1);
class NumberSquare {
    public $min, $max;
    function __construct($min, $max){
        $this->min=$min;
        $this->max=$max;
    }
    function square(){
        $myArrayOfNumbers=range($this->min, $this->max);
        echo implode("", $myArrayOfNumbers).PHP_EOL;
        for($i=1;$i<count($myArrayOfNumbers);$i++){
            foreach ($myArrayOfNumbers as $key=>$item) {
                if($item==$this->max){
                    $myArrayOfNumbers[$key] = $this->min;
                } else {
                    $myArrayOfNumbers[$key] = $item + 1;
                }
            }
            echo implode(" ", $myArrayOfNumbers).PHP_EOL;
        }
    }
}
$play=new NumberSquare((int)readline("Min? "), (int)readline("Max? "));
$play->square();