<?php
declare(strict_types=1);
class AsciiFigure {
    public $number;
    function __construct($number){
        $this->number=$number;
    }
    function buildPyramid() {
        echo str_repeat("/",$this->number-1).str_repeat("\\",$this->number-1).PHP_EOL;
        for($i=1;$i<$this->number;$i++){
            echo str_repeat("/",$this->number-$i-1).str_repeat("*",$i).
                str_repeat("*",$i).str_repeat("\\",$this->number-$i-1).PHP_EOL;
        }
    }
}
$build=new AsciiFigure((int) readline("Enter number-> "));
$build->buildPyramid();