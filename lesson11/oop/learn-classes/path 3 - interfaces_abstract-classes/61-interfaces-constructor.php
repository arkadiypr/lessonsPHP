<?php
//Задача :
//Сделайте интерфейс iCube, который будет описывать фигуру Куб.
//Пусть ваш интерфейс описывает конструктор, параметром принимающий сторону куба, а также методы для получения объема куба и площади поверхности.
//Сделайте класс Cube, реализующий интерфейс iCube.
//Сделайте интерфейс iUser, который будет описывать юзера.
//Предполагается, что у юзера будет имя и возраст и эти поля будут передаваться параметрами конструктора.
//Пусть ваш интерфейс также задает то, что у юзера будут геттеры (но не сеттеры) для имени и возраста.
//Сделайте класс User, реализующий интерфейс iUser.

interface iCube
{
    public function __construct($a);

    public function getSquare();

    public function getVolume();
}

class Cube implements iCube
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getSquare()
    {
        return 6 * $this->a * $this->a;
    }

    public function getVolume()
    {
        return $this->a * $this->a * $this->a;
    }

}

interface iUser
{
    public function __construct($name, $age);

    public function getName();
    public function getAge();
}

class User implements iUser
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

}