<?php
//Сделайте класс Num, у которого будут два приватны статических свойства: num1 и num2.
//Пусть по умолчанию в свойстве num1 хранится число 2, а в свойстве num2 - число 3.
//Сделайте в классе Num метод getSum, который будет выводить на экран сумму значений свойств num1 и num2.

class Num
{
    private static $num1 = 2;
    private static $num2 = 3;

    public static function getSum()
    {
        return self::$num1 + self::$num2;
    }

}

echo Num::getSum();



//Добавьте в наш класс Geometry метод, который будет находить объем шара по радиусу. С помощью этого метода выведите на экран объем шара с радиусом 10.

class Geometry
{
    private static $pi = 3.1415926535; // вынесем Пи в свойство

    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }

    public static function getCircleСircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }

    public static function getVolumeBall($radius)
    {
        return 4 / 3 * self::$pi * pow($radius, 3);
    }
}

echo '<br>';
echo Geometry::getVolumeBall(10);

