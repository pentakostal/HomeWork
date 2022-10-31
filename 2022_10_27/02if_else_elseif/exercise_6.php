<?php
$plate_number = "ML5449";
switch ($plate_number)
{
    case "ML5449":
        echo "This is your car.\n";
        break;
    case $plate_number != "ML5449":
        echo "This is not your car.\n";
        break;
}