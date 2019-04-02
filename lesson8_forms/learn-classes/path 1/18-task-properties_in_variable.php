<?php

//Сделайте класс City (город), в котором будут следующие свойства - name (название), foundation (дата основания), population (население).
//Создайте объект этого класса.
//Пусть дана переменная $props, в которой хранится массив названий свойств класса City. Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств.

class City
{
    public $name;
    public $foundation;
    public $population;

    public function __construct($name, $foundation, $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
}

$city1 = new City('Dnepr', 1825, 1000000);

$props = ['name', 'foundation', 'population'];
// 1 способ вывода
foreach ($props as $prop) {
    echo $city1->$prop.'<br>';
}
//2 способ вывода

echo $city1->{$props[0]}.'<br>';
echo $city1->{$props[1]}.'<br>';
echo $city1->{$props[2]}.'<br>';