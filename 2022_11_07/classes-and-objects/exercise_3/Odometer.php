<?php
class Odometer
{
    private int $mileage;

    public function __construct(int $mileage)
    {
        $this->mileage=$mileage;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function increaseMileage(int $amount = 1): void
    {
        $maxMileage = 999999;
        $newMileage = $this->mileage + $amount;
        if ($newMileage > $maxMileage) {
            $newMileage = 0;
        }
        $this->mileage = $newMileage;
    }
}