<?php

//Задача :
//Добавьте в ваш класс User такой же абстрактный метод increaseRevenue. Напишите реализацию этого метода в классах Employee и Student.
//Добавьте также в ваш класс User абстрактный метод decreaseRevenue (уменьшить зарплату). Напишите реализацию этого метода в классах Employee и Student.
//Сделайте аналогичный класс Rectangle (прямоугольник), у которого будет два приватных свойства: $a для ширины и $b для длины.
//Данный класс также должен наследовать от класса Figure и реализовывать его методы.
//Добавьте в класс Figure метод getSquarePerimeterSum, который будет находить сумму площади и периметра.


abstract class Figure
{
    abstract public function getSquare();

    abstract public function getPerimeter();

    public function getRatio()
    {
        return $this->getSquare() / $this->getPerimeter();
    }

    public function getSquarePerimeterSum()
    {
        return $this->getPerimeter() + $this->getSquare();
    }
}

class Quadrate extends Figure
{

    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getSquare()
    {
        return $this->a * $this->a;
    }

    public function getPerimeter()
    {
        return $this->a * 4;
    }
}

class Rectangle extends Figure
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
}

$quadrate = new Quadrate(2);
echo $quadrate->getSquare();
echo '<br>';
echo $quadrate->getPerimeter();

$rectangle = new Rectangle(2,3);
echo '<br>';
echo $rectangle->getSquare();
echo '<br>';
echo $rectangle->getPerimeter();
echo '<br>';
echo $quadrate->getRatio();
echo '<br>';
echo $quadrate->getSquarePerimeterSum();