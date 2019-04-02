<?php

class User
{
    public $name;
    public $age;


    //Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18.
    //Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.
    public function setAge(int $age)
    {
        if ($age > 18) {
            $this->age = $age;
        }
    }
}

$user1 = new User();

$user1->name = 'Kolya';
$user1->age = 25;

$user1->setAge(17);

echo $user1->age;

//Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), salary (зарплата).
//Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.

class Employee
{
    public $name;
    public $salary;

    public function doubleSalary()
    {
        $this->salary = $this->salary * 2;
    }
}

$employee1 = new Employee();

$employee1->salary = 1400;
$employee1->doubleSalary();

echo '<br>';

echo $employee1->salary;
echo '<br>';

//Сделайте класс Rectangle (прямоугольник), в котором в свойствах будут записаны ширина и высота.
//Сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
//В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.

class Rectangle
{
    public $width;
    public $height;

    public function getSquare()
    {
        return $this->height * $this->width;
    }

    public function getPerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}

$rectangle = new Rectangle();

$rectangle->width = 40;
$rectangle->height = 20;

echo $rectangle->getPerimeter();
echo '<br>';
echo $rectangle->getSquare();
