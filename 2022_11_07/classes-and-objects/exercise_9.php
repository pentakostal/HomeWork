<?php
class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance) {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function showUserNameAndBalance(): string
    {
        if ($this->balance > 0) {
            $display = $this->name . " , $" . $this->balance;
        } elseif ($this->balance < 0) {
            $display = $this->name . " , -$" . abs($this->balance);
        }
        return $display;
    }
}

$den = new BankAccount("Den", 434.6);
$carl = new BankAccount("Carl", -17.3);
echo $den->showUserNameAndBalance() . PHP_EOL;
echo $carl->showUserNameAndBalance() . PHP_EOL;