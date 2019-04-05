<?php
//Задача :
//Сделайте так, чтобы класс Rectangle также реализовывал два интерфейса: и Figure, и Tetragon.
//Сделайте интерфейс Circle (круг) с методами getRadius (получить радиус) и getDiameter (получить диаметр).
//Сделайте так, чтобы класс Disk также реализовывал два интерфейса: и Figure, и Circle.

interface Tetragon
{
    public function getA();
    public function getB();
    public function getC();
    public function getD();
}

interface Figure
{
    public function getSquare();
    public function getPerimeter();
}

interface Circle
{
    public function getRadius();
    public function getDiameter();
}

class Quadrate implements Figure, Tetragon
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->a;
    }

    public function getC()
    {
        return $this->a;
    }

    public function getD()
    {
        return $this->a;
    }

    public function getSquare()
    {
        return $this->a * $this->a;
    }

    public function getPerimeter()
    {
        return 4 * $this->a;
    }
}

class Rectangle implements Figure, Tetragon
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }


    public function getSquare()
    {
        return $this->a * $this->b;
    }

    public function getPerimeter()
    {
        return ($this->a + $this->b) * 2;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->a;
    }

    public function getD()
    {
        return $this->a;
    }

}

class Disk implements Figure, Circle
{

    const PI = 3.14;

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getSquare()
    {
        return self::PI * $this->radius * $this->radius;
    }

    public function getPerimeter()
    {
        return 2 * self::PI * $this->radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getDiameter()
    {
        return $this->radius * 2;
    }
}

$disk = new Disk(3);
echo $disk->getDiameter();
echo '<br>';
echo $disk->getSquare();
echo '<br>';
echo $disk->getPerimeter();
echo '<br>';