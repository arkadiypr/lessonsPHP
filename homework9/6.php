<?php

include '5.php';

//Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
//Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

class Driver extends Worker
{
    private $drivexperience;
    private $category;

    public function __construct($drivexperience, $category) {
        $this->drivexperience = $drivexperience;
        $this->category = $category;
    }


    public function getExperience()
    {
        return $this->drivexperience;
    }

    public function getCategory()
    {
        return $this->category;
    }
}

$driver = new Driver(5, 'D');
$driver->setName('Petya');
$driver->setAge(30);
$driver->setSalary(2500);
echo '<br>';
echo "{$driver->getName()} {$driver->getAge()} {$driver->getSalary()} {$driver->getExperience()} {$driver->getCategory()}";

