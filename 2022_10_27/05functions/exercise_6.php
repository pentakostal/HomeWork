<?php
$something = [
    2,
    8,
    24,
    2.5,
    "ok"
];

for ($i = 0; $i < count($something); $i++) {
    if (gettype($something[$i]) == "integer") {
        echo doubleInteger($something[$i]) . PHP_EOL;
    }
}

function doubleInteger($int) {
    return $int * 2;
}
