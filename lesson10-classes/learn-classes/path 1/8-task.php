<?php

//Сделайте класс Employee, в котором будут следующие публичные свойства - name (имя), age (возраст), salary (зарплата).
//Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта.
//Создайте объект класса Employee с именем 'Вася', возрастом 25, зарплатой 1000.
//Создайте объект класса Employee с именем 'Петя', возрастом 30, зарплатой 2000.
//Выведите на экран сумму зарплат Васи и Пети.

class Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

}

$employee1 = new Employee('Vasya',25,1500);
$employee2 = new Employee('Petya',30,2000);

echo 'Total salary: ';
echo $employee1->salary + $employee2->salary;