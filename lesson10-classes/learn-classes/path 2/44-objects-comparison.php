<?php
class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class EmployeesCollection
{
    private $employees = []; // массив работников

    // Добавляем нового работника:
    public function add($newEmployee)
    {
        if (!$this->exists($newEmployee)) {
            $this->employees[] = $newEmployee;
        }
    }

    // Получаем всех работников в виде массива:
    public function get()
    {
        return $this->employees;
    }

    private function exists($newEmployee)
    {
        foreach ($this->employees as $employee) {
            if ($employee == $newEmployee) {
                return true;
            }
        }

        return false;
    }
}

$employeesCollection = new EmployeesCollection;

$employeesCollection->add(new Employee('Коля', 100));
$employeesCollection->add(new Employee('Коля', 1000));
$employeesCollection->add(new Employee('Коля', 1000));
echo '<pre>';
var_dump($employeesCollection->get());