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
    private $employees = []; // массив работников, по умолчанию пустой

    // Получаем всех работников в виде массива:
    public function get()
    {
        return $this->employees;
    }

    // Подсчитываем количество хранимых работников:
    public function count()
    {
        return count($this->employees);
    }

    // Добавляем нового работника:
    public function add($employee)
    {
        $this->employees[] = $employee; // $employee - объект класса Employee
    }

    public function getTotalSalary()
    {
        $sum = 0;

        // Перебираем работников циклом:
        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary(); // получаем з/п работника через метод getSalary()
        }

        return $sum;
    }
}

$employeesCollection = new EmployeesCollection;

$employeesCollection->add(new Employee('Коля', 100));
$employeesCollection->add(new Employee('Вася', 200));
$employeesCollection->add(new Employee('Петя', 300));

echo $employeesCollection->getTotalSalary(); // выведет 600
echo '<br>';
echo $employeesCollection->count();
echo '<br>';
echo '<pre>';
print_r($employeesCollection->get());

