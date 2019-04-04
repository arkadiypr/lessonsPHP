<?php

//Сделайте класс User, в котором будут следующие свойства только для чтения: name (имя), surname (фамилия)
//Начальные значения этих свойств должны устанавливаться в конструкторе.
//Сделайте также геттеры этих свойств.
//Сделайте так, чтобы третьим параметром в конструктор передавалась дата рождения работника в формате год-месяц-день
//Запишите ее в свойство birthday. Сделайте геттер для этого свойства.
//Сделайте приватный метод calculateAge, который параметром будет принимать дату рождения, а возвращать возраст с учетом того, был ли уже день рождения в этом году, или нет.
//Сделайте так, чтобы метод calculateAge вызывался в конструкторе объекта,
//рассчитывал возраст пользователя и записывал его в приватное свойство age.
//Сделайте геттер для этого свойства.
//Сделайте класс Employee, который будет наследовать от класса User.
//Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника.
//Зарплата должна передаваться четвертым параметром в конструктор объекта.
//Сделайте также геттер для этого свойства.

class User
{
    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge($this->birthday);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getAge()
    {
        return $this->age;
    }

    private function calculateAge($birthday)
    {
        $birthday = explode('-', $birthday);

        if ($birthday[1] >= date('m') && $birthday[2] > date('d')) {
            return date('Y') - $birthday[0] - 1;
        } else {
            return date('Y') - $birthday[0];
        }
    }
}

class Employee extends User
{
    private $salary;

        public function __construct($name, $surname, $birthday, $salary)
    {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$user = new User('Ivan','Ivanov','1989-04-03');
echo $user->getName();
echo ' ';
echo $user->getSurname();
echo '<br>';
echo $user->getBirthday();
echo '<br>';
echo $user->getAge().' years';
echo '<hr>';

$employee = new Employee('Vasya','Petrov','1990-05-14',1000);
echo $employee->getName();
echo ' ';
echo $employee->getSurname();
echo '<br>';
echo $employee->getBirthday();
echo '<br>';
echo $employee->getAge().' years';
echo '<br>';
echo $employee->getSalary().' y.e.';
