<?php
class User
{
    private static $count = 0;
    public $name;

    public function __construct()
    {
        //При создании объекта счетчик увеличивается:
        self::$count++;
    }

    public static function getCounter()
    {
        //Выводим значение счетчика:
        return self::$count;
    }

}

$user1 = new User();
echo User::getCounter(); //выведет 1
echo '<br>';
$user2 = new User();
echo User::getCounter(); //выведет 2
echo '<br>';
$user3 = new User();
echo User::getCounter(); //выведет 3
