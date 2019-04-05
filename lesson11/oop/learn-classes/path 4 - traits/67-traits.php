<?php

trait Helper
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

//Задача:
//
//Реализуйте класс Country (страна) со свойствами name (название), age (возраст), population (количество населения) и геттерами для них. Пусть наш класс для сокращения своего кода использует уже созданный нами трейт Helper.

class Country
{
    use Helper;

    private $population;

    public function __construct($name, $age, $population)
    {
        $this->population = $population;
        $this->name = $name;
        $this->age = $age;
    }

    public function getPopulation()
    {
        return $this->population;
    }
}

$country = new Country('Ukraine',29,40000000);
echo $country->getName();
echo '<br>';
echo $country->getAge();
echo '<br>';
echo $country->getPopulation();
