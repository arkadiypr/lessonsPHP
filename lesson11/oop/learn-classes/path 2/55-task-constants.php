<?php

//Задача :
//Реализуйте предложенный класс Circle.
//С помощью написанного класса Circle найдите длину окружности и площадь круга с радиусом 10.
class Circle
{
    const PI = 3.14; // запишем число ПИ в константу
    private $radius; // радиус круга

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Найдем площадь:
    public function getSquare()
    {
        return self::PI * $this->radius * $this->radius;
    }

    // Найдем длину окружности:
    public function getCircuit()
    {
        return 2 * self::PI * $this->radius;
    }
}


echo (new Circle(10))->getSquare();
echo (new Circle(10))->getCircuit();