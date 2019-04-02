<?php

//Сделайте класс City (город), в котором будут следующие свойства: name (название города), population (количество населения).
//Создайте 5 объектов класса City, заполните их данными и запишите в массив.
//Переберите созданный вами массив с городами циклом и выведите города и их население на экран.



class City
{
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}

$city1 = new City('Kiev', 3000000);
$city2 = new City('Dnepr', 1000000);
$city3 = new City('Kharkiv', 2000000);
$city4 = new City('London', 4000000);
$city5 = new City('Seul', 8000000);

$cities = [
    $city1,
    $city2,
    $city3,
    $city4,
    $city5
];

foreach ($cities as $city) {
    echo $city->name.' - '.$city->population.'<br>';
}