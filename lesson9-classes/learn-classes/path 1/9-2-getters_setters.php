<?php

class Man {
    private $age;
    private $name;

    public function __construct($name, $age) {
        $this->setAge($age);
        $this->setName($name);
    }

    public function setAge($age) {
        if (is_integer($age) && $age >= 0 && $age < 150) {
            $this->age = $age;
        } else {
            exit ("Некорректный возраст");
        }
    }

    public function setName($name) {
        $name = trim($name);
        if ($name != '') {
            $this->name = $name;
        } else {
            exit ("Некорректное имя");
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$man = new Man('Jhon Doe', 21);
$man->setAge(25);

