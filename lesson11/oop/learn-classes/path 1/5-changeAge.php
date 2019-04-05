<?php

class User
{
    public $name;
    public $age;

    // Метод для изменения возраста юзера:
    public function setAge($age)
    {
        // Если возраст от 18 до 60:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    // Метод для добавления к возрасту:
    public function addAge($years)
    {
        $newAge = $this->age + $years;

        // Проверим возраст на корректность(обновим, если новый возраст прошел проверку)
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }

    // Метод для уменьшения текущего возвраста:
    public function subAge($years)
    {
        $newAge = $this->age - $years;

        // Проверим возраст на корректность(обновим, если новый возраст прошел проверку)
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }

    }

    // Метод для проверки возраста:
    private function isAgeCorrect($age)
    {
        return $age >= 18 and $age <= 60;

    }
}

$user = new User;

$user->setAge(30);
$user->setAge(15);
$user->addAge(20);
$user->addAge(20);
$user->subAge(30);
$user->subAge(5);
echo $user->age;
