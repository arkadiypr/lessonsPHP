<?php
//Сделайте интерфейс iUser с методами getName, setName, getAge, setAge.
//Сделайте интерфейс iEmployee, наследующий от интерфейса iUser и добавляющий в него методы getSalary и setSalary.
//Сделайте класс Employee, реализующий интерфейс iEmployee.

interface iUser
{
    public function setName($name);
    public function getName();
    public function setAge($age);
    public function getAge();
}

interface iEmployee extends iUser
{
    public function setSalary($salary);
    public function getSalary();
}

class Employee implements iEmployee
{

    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
    }

    public function setSalary($salary)
    {
        // TODO: Implement setSalary() method.
    }

    public function getSalary()
    {
        // TODO: Implement getSalary() method.
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function setAge($age)
    {
        // TODO: Implement setAge() method.
    }

    public function getAge()
    {
        // TODO: Implement getAge() method.
    }
}