<?php
require_once 'Account.php';

class AccountTransfer
{
    private array $accountDb = [];

    public function setAccount(string $name, float $balance): void
    {
        $this->accountDb[] = new Account($name, $balance);
    }

    public function transfer($accountFrom, $accountTo, $amount) {
        foreach ($this->accountDb as &$value) {
            if ($accountFrom == $value->getName()) {
                $value->withdraw($amount);
            }
            if ($accountTo == $value->getName()) {
                $value->deposite($amount);
            }
        }
    }

    public function getInfo($name): string
    {
        $info = "";
        foreach ($this->accountDb as &$value) {
            if ($name == $value->getName()) {
                $info = $value->getAccountInfo();
            }
        }
        return $info;
    }
}