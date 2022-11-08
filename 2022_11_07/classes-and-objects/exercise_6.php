<?php
class CustomerTaste
{
    private int $customerNumber;

    public function __construct($customerNumber)
    {
        $this->customerNumber=$customerNumber;
    }

    public function getCustomerNumber(): string
    {
        return "$this->customerNumber people have surveyed";
    }

    public function getMoreEnergy():string
    {
        return round($this->customerNumber * 0.14) . " people purchased one ore more energy drinks.";
    }
    
    public function getCitrusDrinks(): string
    {
        return round(round($this->customerNumber * 0.14) * 0.64) . " people prefer citrus flavored drinks.";
    }
}

$customers = new CustomerTaste(12467);
echo $customers->getCustomerNumber() .PHP_EOL;
echo $customers->getMoreEnergy() . PHP_EOL;
echo $customers->getCitrusDrinks() . PHP_EOL;
