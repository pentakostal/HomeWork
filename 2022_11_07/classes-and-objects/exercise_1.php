<?php
declare(strict_types=1);
class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name=$name;
        $this->price=$price;
        $this->amount=$amount;
    }

    public function printProduct(): string
    {
        return "$this->name, $this->price EUR, $this->amount units".PHP_EOL;
    }

    public function changeQuantity($amount): int
    {
        return $this->amount=$amount;
    }

    public function changePrice($price): float
    {
        return $this->price=$price;
    }
}

$indexOne = new Product("Logitech mouse", 70.00, 14);
$indexTwo = new Product("iPhone 5s", 999.99, 3);
$indexThree = new Product("Epson EB-U05", 440.46, 1);

echo $indexOne->printProduct();
echo $indexTwo->printProduct();
echo $indexThree->printProduct();

$indexTwo->changeQuantity(10);
echo $indexTwo->printProduct();

$indexThree->changePrice(349.99);
echo $indexThree->printProduct();