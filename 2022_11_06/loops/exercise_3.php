<?php
$wordFirst = (string) readline("Enter first word: ");
$wordSecond = (string) readline("Enter second word: ");
$i=0;
while (TRUE) {
    $result = $wordFirst.str_repeat(".", $i).$wordSecond;
    if (strlen($result)<30) {
        $i++;
    } else {
        echo $result;
        break;
    }

}
