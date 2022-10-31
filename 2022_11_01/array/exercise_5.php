<?php
//Board and display(output).
$board = [
    " ", " ", " ",
    " ", " ", " ",
    " ", " ", " "
];

function display($board)
{
    echo $board[0] . "|" . $board[1] . "|" . $board[2] . PHP_EOL;
    echo "-+-+-". PHP_EOL;
    echo $board[3] . "|" . $board[4] . "|" . $board[5] . PHP_EOL;
    echo "-+-+-". PHP_EOL;
    echo $board[6] . "|" . $board[7] . "|" . $board[8] . PHP_EOL;
}

//Coordinate system transformation
function coordinate($choice_mod)
{
    switch($choice_mod) {
        case [1, 1]:
            return 0;
        case [1, 2]:
            return 1;
        case [1, 3]:
            return 2;
        case [2, 1]:
            return 3;
        case [2, 2]:
            return 4;
        case [2, 3]:
            return 5;
        case [3, 1]:
            return 6;
        case [3, 2]:
            return 7;
        case [3, 3]:
            return 8;
    }
}

//Game mechanic.
for ($i = 1; $i < 10; $i++) {
    if ($i % 2 == 0) {
        $choice = readline("'O' choose your location (row,column): ");
        $choice_mod = array_map('intval', explode(",", $choice));
        $index = coordinate($choice_mod);
        $board[$index] = "O";
    } else {
        $choice = readline("'X' choose your location (row,column): ");
        $choice_mod = array_map('intval', explode(",", $choice));
        $index = coordinate($choice_mod);
        $board[$index] = "X";
    }
    display($board);

    //win statement
        //rows
            //X
    if ($board[0] === "X" && $board[1] === "X" && $board[2] === "X") {
        echo "X won" . PHP_EOL;
        break;
    } elseif ($board[3] === "X" && $board[4] === "X" && $board[5] === "X") {
        echo "X won" . PHP_EOL;
        break;
    } elseif ($board[6] === "X" && $board[7] === "X" && $board[8] === "X") {
        echo "X won" . PHP_EOL;
        break;
    }
            //O
    if ($board[0] === "O" && $board[1] === "O" && $board[2] === "O") {
        echo "O won" . PHP_EOL;
        break;
    } elseif ($board[3] === "O" && $board[4] === "O" && $board[5] === "O") {
        echo "O won" . PHP_EOL;
        break;
    } elseif ($board[6] === "O" && $board[7] === "O" && $board[8] === "O") {
        echo "O won" . PHP_EOL;
        break;
    }
        //Columns
            //X
    if ($board[0] === "X" && $board[3] === "X" && $board[6] === "X") {
        echo "X won" . PHP_EOL;
        break;
    } elseif ($board[1] === "X" && $board[4] === "X" && $board[7] === "X") {
        echo "X won" . PHP_EOL;
        break;
    } elseif ($board[2] === "X" && $board[5] === "X" && $board[8] === "X") {
        echo "X won" . PHP_EOL;
        break;
    }
            //O
    if ($board[0] === "O" && $board[3] === "O" && $board[6] === "O") {
        echo "O won" . PHP_EOL;
        break;
    } elseif ($board[1] === "O" && $board[4] === "O" && $board[7] === "O") {
        echo "O won" . PHP_EOL;
        break;
    } elseif ($board[2] === "O" && $board[5] === "O" && $board[8] === "O") {
        echo "O won" . PHP_EOL;
        break;
    }
        //Cross
            //X
    if ($board[0] === "X" && $board[4] === "X" && $board[8] === "X") {
        echo "X won" . PHP_EOL;
        break;
    } elseif ($board[6] === "X" && $board[4] === "X" && $board[2] === "X") {
        echo "X won" . PHP_EOL;
        break;
    }
            //O
    if ($board[0] === "O" && $board[4] === "O" && $board[8] === "O") {
        echo "O won" . PHP_EOL;
        break;
    } elseif ($board[6] === "O" && $board[4] === "O" && $board[2] === "O") {
        echo "O won" . PHP_EOL;
        break;
    }

}

