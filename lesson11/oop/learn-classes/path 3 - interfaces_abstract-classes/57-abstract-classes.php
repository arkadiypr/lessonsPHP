<?php
abstract class User
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // Увеличение награждения
    abstract protected function increaseRevenue(int $value);

    // Уменьшение награждения
    abstract protected function decreaseRevenue(int $value);
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

    public function increaseRevenue(int $value)
    {
        $this->salary += $value;
    }

    public function decreaseRevenue(int $value)
    {
        $this->salary -= $value;
    }
}

class Student extends User
{
    private $scholarship; // стипендия

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }

    public function increaseRevenue(int $value)
    {
        $this->scholarship += $value;
    }

    public function decreaseRevenue(int $value)
    {
        $this->scholarship -= $value;
    }
}

$employee = new Employee;
$employee->setName('Коля'); // метод родителя, т.е. класса User
$employee->setSalary(1000); // свой метод, т.е. класса Employee

echo $employee->getName(); // выведет 'Коля'
echo $employee->getSalary(); // выведет 1000

$student = new Student();
$student->setName('Vasya');
$student->setScholarship(500);
$student->increaseRevenue(200);
$student->decreaseRevenue(100);
echo $student->getName();
echo $student->getScholarship();
