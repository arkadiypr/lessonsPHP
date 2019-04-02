<?php

class Employee
{
    public $name;
    public $age;
    public $salary;
}

$employee1 = new Employee();

$employee1->name = 'Ivan';
$employee1->age = 25;
$employee1->salary = 1000;

$employee2 = new Employee();

$employee2->name = 'Vasya';
$employee2->age = 26;
$employee2->salary = 2000;

echo 'Sum salary Ivan and Vasya: ';
echo $employee1->salary + $employee2->salary;

echo '<br>';

echo 'Sum age Ivan and Vasya: ';
echo $employee1->age + $employee2->age;
