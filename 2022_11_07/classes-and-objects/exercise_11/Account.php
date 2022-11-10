<?php
class Account
{
    protected ?string $name;
    protected ?float $balance;

    public function __construct(?string $name = null, ?float $balance = null)
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

$program = new AccountTransfer();
$program->setAccount("A", 100);
$program->setAccount("B", 0);
$program->setAccount("C", 0);
var_dump($program);
$program->transfer("A", "B", 50);
$program->transfer("B", "C", 25);
var_dump($program);



