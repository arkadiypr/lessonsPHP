<?php
//Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
//public методы setName, getName, setAge, getAge.
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
//а также методы public getSalary и setSalary.
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000.
//Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.

class User
{
    protected $name;
    protected $age;

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
}

class Worker extends User
{
    private $salary;

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

class Student extends User
{
    private $grants;
    private $course;

    public function getGrants()
    {
        return $this->grants;
    }

    public function setGrants($grants): void
    {
        $this->grants = $grants;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course): void
    {
        $this->course = $course;
    }
}

$student = new Student();
$student->setName('Mike');
$student->setAge(19);
$student->setCourse(2);
$student->setGrants(500);

echo "{$student->getName()} - {$student->getAge()} - {$student->getCourse()} - {$student->getGrants()}";