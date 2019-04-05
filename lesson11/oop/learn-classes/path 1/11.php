<?php
class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }
}

$user = new User('Ivan', 25);

echo $user->getName(); //'Ivan'
echo $user->getAge(); // '25'
$user->setAge(30);
echo $user->getAge(); // '30'