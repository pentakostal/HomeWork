<?php
require_once 'Account.php';
require_once 'Account transfer.php';

$program = new AccountTransfer();
$program->setAccount("A", 100);
$program->setAccount("B", 0);
$program->setAccount("C", 0);

echo $program->getInfo("A");
echo $program->getInfo("B");
echo $program->getInfo("C");

$program->transfer("A", "B", 50);
$program->transfer("B", "C", 25);

echo $program->getInfo("A");
echo $program->getInfo("B");
echo $program->getInfo("C");
