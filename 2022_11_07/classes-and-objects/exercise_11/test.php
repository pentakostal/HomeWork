<?php
require_once 'Account.php';
require_once 'Account transfer.php';

$program = new AccountTransfer();
$program->setAccount("A", 100);
$program->setAccount("B", 0);
$program->setAccount("C", 0);
var_dump($program);
$program->transfer("A", "B", 50);
$program->transfer("B", "C", 25);
var_dump($program);
