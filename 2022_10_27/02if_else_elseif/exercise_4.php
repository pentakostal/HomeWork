<?php
$num_x = 32;
$num_y = 54;
/*if ($num_x > $num_y)
{
    echo "$num_x is greater than $num_y.\n";
} elseif ($num_x < $num_y) {
    echo "$num_y is greater than $num_x.\n";
} else {
    echo"Numbers are equal.\n";
}
*/

switch ([$num_x, $num_y])
{
    case $num_x > $num_y:
        echo "$num_x is greater than $num_y.\n";
        break;
    case $num_x < $num_y:
        echo "$num_y is greater than $num_x.\n";
        break;
    case $num_x == $num_y:
        echo"Numbers are equal.\n";
        break;
}

