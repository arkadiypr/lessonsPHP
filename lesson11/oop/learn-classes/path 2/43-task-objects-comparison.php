<?php
//Задача 1:
//Сделайте функцию compare1, которая параметром будет принимать два объекта и возвращать true, если они имеют одинаковые свойства и значения являются экземплярами одного и того же класса, и false, если это не так.

//Задача 2:
//Сделайте функцию compare2, которая параметром будет принимать два объекта и возвращать true, если переданные переменные ссылаются на один и тот же объект, и false, если на разные.

//Задача 3:
//Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.
//Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.
//Функция должна возвращать 0, если объекты разные, но одного и того же класса и с теми же свойствами и их значениями.
//Функция должна возвращать -1 в противном случае.
function compare1(object $obj1, object $obj2) {
    return $obj1 == $obj2;
}

function compare2(object $obj1, object $obj2) {
    return $obj1 === $obj2;
}

function compare3(object $obj1, object $obj2) {
    if ($obj1 === $obj2) {
        return 1;
    } elseif ($obj1 == $obj2) {
        return 0;
    } else {
        return -1;
    }
}

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
}

$user1 = new User('Ivan', 25);
$user2 = new User('Ivan', '25');

var_dump(compare1($user1, $user2));
$user2 = $user1;
var_dump(compare2($user1, $user2));
var_dump(compare3($user1, $user2));