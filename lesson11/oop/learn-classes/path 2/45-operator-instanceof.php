<?php

class Employee
{
    public $name;
    public $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }


}


class Student
{
    public $name;
    public $scholarship;

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }


}

$empl1 = new Employee('Ivan', 1000);
$empl2 = new Employee('Vova', 1500);
$empl3 = new Employee('Vasya', 2000);

$stud1 = new Student('Petya', 450);
$stud2 = new Student('Anton', 500);
$stud3 = new Student('Roman', 550);

$arr = [$empl1, $stud3, $stud1, $empl2, $stud2, $empl3];

$totalSalary = 0;
$totalScholarship = 0;
foreach ($arr as $value) {
    if ($value instanceof Employee) {
        $totalSalary += $value->salary;
        echo $value->name.' - Employee'.'<br>';
    } else {
        $totalScholarship += $value->scholarship;
        echo $value->name.' - Student'.'<br>';
    }
}

echo $totalSalary;
echo '<br>';
echo $totalScholarship;
