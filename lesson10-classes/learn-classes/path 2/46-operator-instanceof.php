<?php

class User
{
    public $name;
    public $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}

class Employee extends User
{
    public $salary;

    public function __construct($name, $surname, $salary)
    {
        parent::__construct($name,$surname);
        $this->salary = $salary;
    }
}

class City
{
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

}

$user1 = new User('Ivan', 'Ivanov');
$user2 = new User('Vasya', 'Vasilev');
$user3 = new User('Petya', 'Petrov');

$employee1 = new Employee('Oleg', 'Rusov', 1000);
$employee2 = new Employee('Anna', 'Denisova', 2000);
$employee3 = new Employee('Anton', 'Kolov', 3000);

$city1 = new City('Dnepr', 1000000);
$city2 = new City('Kiev', 3000000);
$city3 = new City('Moskow', 8000000);

$arr = [$employee2, $user3, $city1, $user1, $employee3, $employee1, $city2, $user2, $city3];

echo '<br>';

foreach ($arr as $key => $obj) {
    if ($obj instanceof User && !($obj instanceof Employee) ) {
        echo $obj->name.'<br>';
    }
}
