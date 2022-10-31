<?php
$num = 50;
if ($num <= 100 && $num >= 1)        //&& and operator - both statements must be true, || - ore operator
{
    echo "${num} is in range between 1 and 100.\n";
} else {
    echo"${num} is not in range between 1 and 100.\n";
}

//echo ($num <= 100 && $num >= 1) ? "${num} is in range between 1 and 100.\n" : "${num} is not in range between 1 and 100.\n";