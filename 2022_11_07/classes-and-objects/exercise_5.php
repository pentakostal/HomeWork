<?php
class Date
{
    private string $month;
    private int $day;
    private int $year;

    public function __construct(string $month, int $day, int $year) {
        $months = [
            "January" => 31,
            "March" => 31,
            "April" => 30,
            "May" => 31,
            "June" => 30,
            "July" => 31,
            "August" => 30,
            "September" => 31,
            "October" => 30,
            "November" => 31,
            "December" => 30
        ];

        if ($year % 4 == 0 || $year % 100 == 0 || $year % 400 == 0) {
            foreach ($months as $key=>$value) {
                if (ucfirst($month) === $key) {
                    if ($day <= $value && $day > 0) {
                        $this->setDate($day, $month, $year);
                    }
                } elseif (ucfirst($month) === "February") {
                    if ($day <=29 && $day > 0) {
                        $this->setDate($day, $month, $year);
                    }
                }
            }
        } else {
            foreach ($months as $key => $value) {
                if (ucfirst($month) === $key) {
                    if ($day <= $value && $day > 0) {
                        $this->setDate($day, $month, $year);
                    }
                } elseif (ucfirst($month) === "February") {
                    if ($day <= 28 && $day > 0) {
                        $this->setDate($day, $month, $year);
                    }
                }
            }
        }
    }

    private function setDate(int $day, string $month, int $year): void
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay(): string
    {
        return isset($this->day) ? "day is $this->day" : "wrong day/uninitialized";
    }

    public function getMonth(): string
    {
        return isset($this->month) ? "month is $this->month" :"wrong month/uninitialized";
    }

    public function getYear(): string
    {
        return isset($this->year) ? "year is $this->year" :"wrong year/uninitialized";
    }

    public function getDate(): string
    {
        if (isset($this->year) && isset($this->month) && isset($this->day)) {
            return "$this->month / $this->day / $this->year";
        } else {
            return "wrong date";
        }
    }
}
//For testing
$date = new Date("january", 24, 1234);
var_dump($date);
echo $date->getDay() . PHP_EOL;
echo $date->getMonth() . PHP_EOL;
echo $date->getYear() . PHP_EOL;
echo $date->getDate() . PHP_EOL;
