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

$user = new User('Ivan', 27);

echo $user->name.' '.$user->age;