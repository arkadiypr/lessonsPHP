<?php

//Сделайте класс Programmer, который будет наследовать от класса Employee.
//Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, которыми владеет программист.
//Сделайте также геттер и сеттер для этого свойства.

class User
{
    private $name;
    private $age;

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

class Employee extends User
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


class Programmer extends Employee
{
    private $langs;

    public function getLangs()
    {
        return $this->langs;
    }

    public function setLangs($langs)
    {
        $this->langs = $langs;
    }


}

$programmer = new Programmer();
$programmer->setLangs(['PHP', 'JS', 'C++']);
print_r($programmer->getLangs());

//Сделайте класс Driver (водитель), который будет наследовать от класса Employee.
//Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D),
//а также геттеры и сеттеры к ним.

class Driver extends Employee
{
    private $experience;
    private $category;

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience): void
    {
        $this->experience = $experience;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }
}