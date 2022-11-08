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

function createDog(string $name, string $sex, string $mother, string $father): DogTest
{
    $dog=new DogTest($name, $sex, $mother, $father);
    echo $dog->getDog() . PHP_EOL;
    return $dog;
}

createDog("Max", "male", "Lady", "Rocky" );
/*createDog("Rocky", "male");
createDog("Sparky", "male");
createDog("Buster", "male");
createDog("Sam", "male");
createDog("Lady", "female");
createDog("Molly", "female");
createDog("Coco", "female");
*/
//var_dump($dogDb);

