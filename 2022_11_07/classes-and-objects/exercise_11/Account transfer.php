<?php
require_once 'Account.php';

class AccountTransfer
{
    private array $accountDb = [];

    public function setAccount(string $name, float $balance): void
    {
        $this->accountDb[] = new Account($name, $balance);
    }

    function transfer($accountFrom, $accountTo, $amount) {
        foreach ($this->accountDb as &$value) {
            if ($accountFrom == $value->name) {
                $value->withdraw($amount);
            }
            if ($accountTo == $value->name) {
                $value->deposite($amount);
            }
        }
    }
}