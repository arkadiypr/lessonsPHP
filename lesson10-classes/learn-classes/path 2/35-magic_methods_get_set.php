<?php

class Man {
    private $age;
    private $name;

    public function __construct($name, $age) {
        $this->age = $age;
        $this->name = $name;
    }

    public function __set($name, $value) {
        if ($name == 'age') {
            if (is_integer($value) && $value >= 0 && $value < 150) {
                $this->age = $value;
            } else {
                exit ("Некорректный возраст");
            }
        } else if ($name == 'name') {
            if ($name != '') {
                $this->name = $name;
            } else {
                exit ("Некорректное имя");
            }
        } else {
            exit ("Неизветное свойство");
        }
    }

    public function __get($name) {
        if ($name == 'age' || $name == 'name') {
            return $this->$name;
        }
        exit('Неизвестное свойство!');
    }
}


$man = new Man('Jhon Doe', 21);
echo $man->age; // 21
$man->age = -5;

