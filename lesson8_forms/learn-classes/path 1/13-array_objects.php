<?php

class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$users[] = new User('Kolya',25);
$users[] = new User('Vasya',30);
$users[] = new User('Petya',35);


echo '<pre>';
var_dump($users);


foreach ($users as $user) {
    echo $user->name.', ';
}