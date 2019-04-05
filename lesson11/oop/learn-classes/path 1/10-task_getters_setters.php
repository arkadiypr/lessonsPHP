<?php
//Сделайте класс Employee, в котором будут следующие private свойства: name (имя), age (возраст) и salary (зарплата).
//Сделайте геттеры и сеттеры для всех свойств класса Employee.
//Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет).
//Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
//Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара.
//То есть еще раз для полной ясности условия задачи: в свойстве salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.

class Employee
{
    private $name;
    private $age;
    private $salary;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function getSalary()
    {
        return $this->salary.' $';
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    private function isAgeCorrect($age)
    {
        return $age >=1 && $age <=100;
    }

}

$employee = new Employee();

$employee->setAge(25);

echo $employee->getAge().'<br>';
$employee->setAge(75);
echo $employee->getAge().'<br>';
$employee->setAge(102);
echo $employee->getAge().'<br>';
$employee->setSalary(1000);
echo $employee->getSalary().'<br>';
