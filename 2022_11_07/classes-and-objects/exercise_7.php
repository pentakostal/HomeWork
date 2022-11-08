<?php
class Dog
{
    protected string $name;
    protected string $sex;
    protected string $mother;
    protected string $father;

    public function __construct(string $name, string $sex, string $mother, string $father)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }
}

class DogTest extends Dog
{

    public function getDog(): string
    {
        return $this->name . " , " . $this->sex;
    }
}

$a = new DogTest("Max", "male", "Lady", "Rocky");
echo $a->getDog();


//var_dump($dogDb);

