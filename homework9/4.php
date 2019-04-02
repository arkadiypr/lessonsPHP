<?php
//Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата).
//Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта
//(вот так: new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.
//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000.
//Выведите на экран произведение его возраста и зарплаты.

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$worker = new Worker('Dima', 25,1000);
echo $worker->getAge() * $worker->getSalary();