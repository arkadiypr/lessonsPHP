<?php

class User
	{
        private static $count = 0;
        public $name;

        public function __construct($name)
    {
        $this->name = $name;

        // Увеличиваем счетчик при создании объекта:
        self::$count++;
    }

        // Метод, возвращающий значение счетчика:
        public static function getCount()
    {
        // Выводим значение счетчика:
        return self::$count;
    }
    }

$user1 = new User('sss');
echo 'count = '.User::getCount().'<br>';
$user2 = new User('www');
echo 'count = '.User::getCount().'<br>';
$user3 = new User('aaa');
echo 'count = '.User::getCount().'<br>';
$user4 = new User('qqq');
echo 'count = '.User::getCount().'<br>';
