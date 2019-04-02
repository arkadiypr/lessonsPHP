<?php

//Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата
// и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$worker1 = new Worker();
$worker1->setName('Ivan');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker();
$worker2->setName('Vasya');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo 'Total salary Ivan and Vasya: '.($worker1->getSalary() + $worker2->getSalary());
echo '<br>';
echo 'Sum age Ivan and Vasya: '.($worker1->getAge() + $worker2->getAge());