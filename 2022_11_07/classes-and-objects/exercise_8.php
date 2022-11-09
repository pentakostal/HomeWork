<?php
class SavingsAccount
{
    private float $balance;
    private float $interestRate;
    public float $depositeMemory = 0;
    private int $withdrawMemory = 0;
    private float $interestEarnedSum = 0;

    public function setBalance($balance): float
    {
        return $this->balance=$balance;
    }

    public function getBalance(): float
    {
        return round($this->balance, 2);
    }

    public function setInterestRate($interestRate): int
    {
        return $this->interestRate=$interestRate;
    }

    public function monthInterestRate($deposite): void
    {
        $this->interestEarnedSum += $this->balance * ($this->interestRate / 12);
        $this->balance += $this->balance * ($this->interestRate / 12);
    }

    public function getMonthInterestRate(): float
    {
        return round($this->interestEarnedSum, 2);
    }

    public function getDepositeMemory(): float
    {
        return round($this->depositeMemory, 2);
    }

    public function getWithdrawMemory(): float
    {
        return round($this->withdrawMemory, 2);
    }

    public function countDeposite($deposite): void
    {
        $this->depositeMemory += $deposite;
        $this->balance += $deposite;
    }

    public function countWithdraw($withdraw): void
    {
        $this->withdrawMemory += $withdraw;
        $this->balance -= $withdraw;
    }
}

$user = new SavingsAccount();
$user->setBalance(readline("Enter start deposite: "));
$user->setInterestRate(readline("Enter anual interest level (12, 27 , 35): "));

$iteration = 0;
while (true) {
    if ($iteration == 4) {
        break;
    } else {
        $user->countDeposite(readline("Enter your deposite: "));
        $user->countWithdraw(readline("Enter your withdraw: "));
        $user->monthInterestRate($user->getBalance());
        $iteration++;
    }
}

echo "Total deposite is " . $user->getDepositeMemory() . PHP_EOL;
echo "Total withdraw is " . $user->getWithdrawMemory() . PHP_EOL;
echo "Interest earned is " . $user->getMonthInterestRate() . PHP_EOL;
echo "Total balance is " . $user->getBalance() . PHP_EOL;

//var_dump($user);
