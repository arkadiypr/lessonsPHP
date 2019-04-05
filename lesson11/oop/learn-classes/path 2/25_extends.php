<?php
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

class Student extends User
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course): void
    {
        $this->course = $course;
    }

}

$employee = new Employee();

$employee->setSalary(500);
$employee->setName('Ivan');
$employee->setAge(23);
echo $employee->getSalary();
echo $employee->getName();
echo $employee->getAge();

$student = new Student();
$student->setCourse(2);
$student->setName('Vasya');
$student->setAge(18);
echo $student->getName();
echo $student->getAge();
echo $student->getCourse();