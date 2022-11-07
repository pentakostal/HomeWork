<?php
class Point {
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    public function getCoordinate(): string
    {
        return "($this->x, $this->y)".PHP_EOL;
    }

    public function swapPoints($coordinateOne, $coordinateTwo): void
    {
        $coordinateOne->x ^=$coordinateTwo->x ^=$coordinateOne->x ^=$coordinateTwo->x;
        $coordinateOne->y ^=$coordinateTwo->y ^=$coordinateOne->y ^=$coordinateTwo->y;
    }
}

$coordinateOne=new Point(5, 2);
$coordinateTwo=new Point(-3, 6);
echo $coordinateOne->getCoordinate();
echo $coordinateTwo->getCoordinate();

$coordinateOne->swapPoints($coordinateOne, $coordinateTwo);
echo $coordinateOne->getCoordinate();
echo $coordinateTwo->getCoordinate();