<?php
class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name = null, float $balance = null)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
    }

    public function deposite(float $amount): void
    {
        $this->balance += $amount;
    }

    public function getAccountInfo(): string
    {
        return "$this->name , balance is: $this->balance" . PHP_EOL;
    }
}





