<?php
declare(strict_types=1);
class Product {
    public $name, $price, $amount;
    function __constructor(string $name, float $price, int $amount)
    {
        $this->name=$name;
        $this->price=$price;
        $this->amount=$amount;
    }
    function printProduct(): string
    {
        return "$this->name, $this->price EUR, $this->amount units".PHP_EOL;
    }
    function changeQuantity($amount)
    {
        return $this->amount=$amount;
    }
    function changePrice($price)
    {
        return $this->price=$price;
    }
}
function createDb(string $name, float $price, int $amount): string
{
    $merch=new Product();
    $merch->name = $name;
    $merch->changePrice(readline("Enter price:"));
    $merch->changeQuantity(readline("Enter quntity: "));
    return $merch->printProduct();
}
echo createDb("Logitech mouse", 70.00, 14);
echo createDb("iPhone 5s", 999.99, 3);
echo createDb("Epson EB-U05", 440.46, 1);

