<?php
class PigLet {
    private $score;
    function __construct($score) {
        (int) $this->score=$score;
    }

    function game() {
        while (true) {
            (string) $choice = readline("Roll dice (y/n): ");
            if ($choice == "y") {
                $value = rand(1, 6);
                if ($value == 1) {
                    echo "You rolled 1".PHP_EOL;
                    echo "You got 0 points".PHP_EOL;
                    break;
                } else {
                    echo "You rolled $value".PHP_EOL;
                    $this->score += $value;
                }
            } else {
                echo "You got $this->score points".PHP_EOL;
                break;
            }
        }
    }
}
$game = new PigLet(0);
$game->game();