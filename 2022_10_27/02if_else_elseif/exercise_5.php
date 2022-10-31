<?php
$num = 50;
$y = 72;
$z = 49;
if ($y > $z)
{
    echo ($num <= $y && $num >= $z) ? "Correct.\n" : "Not correct.\n";
} elseif ($y < $z)
{
    echo ($num <= $z && $num >= $y) ? "Correct.\n" : "Not correct.\n";
} else {
    echo ($num == $z) ? "Correct.\n" : "Not correct.\n";
}