<?php
declare(strict_types=1);
class Point {
    public $x, $y;
    function __construct(int $x, int $y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    function swapPoints($coordinateOne, $coordinateTwo)
    {
        $coordinateOne->x ^=$coordinateTwo->x ^=$coordinateOne->x ^=$coordinateTwo->x;
        $coordinateOne->y ^=$coordinateTwo->y ^=$coordinateOne->y ^=$coordinateTwo->y;
    }
}
$coordinateOne=new Point(5, 2);
$coordinateTwo=new Point(-3, 6);
echo "(" . $coordinateOne->x . ", " . $coordinateOne->y . ")".PHP_EOL;
echo "(" . $coordinateTwo->x . ", " . $coordinateTwo->y . ")".PHP_EOL;
$coordinateOne->swapPoints($coordinateOne, $coordinateTwo);
echo "(" . $coordinateOne->x . ", " . $coordinateOne->y . ")".PHP_EOL;
echo "(" . $coordinateTwo->x . ", " . $coordinateTwo->y . ")".PHP_EOL;