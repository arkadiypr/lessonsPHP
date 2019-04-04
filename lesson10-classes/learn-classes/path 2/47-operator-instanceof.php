<?php
class Employee
{
    private $name; // имя
    private $salary; // зарплата

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер зарплаты:
    public function getSalary()
    {
        return $this->salary;
    }
}

class Student
{
    private $name; // имя
    private $scholarship; // стипендия

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер стипендии:
    public function getScholarship()
    {
        return $this->scholarship;
    }
}

class UsersCollection
{
    private $employees = []; // массив работников
    private $students = []; // массив студентов

    public function add(object $object)
    {
        if ($object instanceof Employee) {
            $this->employees[] = $object;
        } elseif ($object instanceof Student) {
            $this->students[] = $object;
        }
    }

    // Получаем суммарную зарплату:
    public function getTotalSalary()
    {
        $totalSalary = 0;

        foreach ($this->employees as $employee) {
            $totalSalary += $employee->getSalary();
        }

        return $totalSalary;
    }

    // Получаем суммарную стипендию:
    public function getTotalScholarship()
    {
        $totalScholarship = 0;

        foreach ($this->students as $student) {
            $totalScholarship += $student->getScholarship();
        }

        return $totalScholarship;
    }

    // Общие начисления
    public function getTotalPayment()
    {
        return $this->getTotalScholarship() + $this->getTotalSalary();
    }
}

echo '<pre>';
$usersCollection = new UsersCollection;

$usersCollection->add(new Student('Петя', 100));
$usersCollection->add(new Student('Ваня', 200));

$usersCollection->add(new Employee('Коля', 300));
$usersCollection->add(new Employee('Вася', 400));

// Получим полную сумму стипендий:
echo $usersCollection->getTotalScholarship(); // выведет 300

// Получим полную сумму зарплат:
echo $usersCollection->getTotalSalary(); // выведет 700

// Получим полную сумму платежей:
echo $usersCollection->getTotalPayment(); // выведет 1000

print_r($usersCollection);