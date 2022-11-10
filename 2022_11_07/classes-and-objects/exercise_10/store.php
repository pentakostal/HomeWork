<?php
require_once 'Video.php';
require_once 'VideoStore.php';

class Application
{
    function run()
    {
        $program = new VideoStore();
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";
            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $program->addVideo((string) readline("Enter title: "));
                    break;
                case 2:
                    $program->checkOutStore((string) readline("Enter title: "));
                    break;
                case 3:
                    $program->returneToStore((string) readline("Enter title: "));
                    break;
                case 4:
                    echo $program->listVideo() .  PHP_EOL;
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

}

$app = new Application();
$app->run();