<?php


class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Users
{
    public function __construct($name1, $name2, $name3)
    {
        $this->user1 = new User($name1);
        $this->user2 = new User($name2);
        $this->user3 = new User($name3);
    }
}


$users = new Users('Вася', 'Коля', 'Петя');

echo '<pre>';
print_r($users);

foreach ($users as $user) {
    //Выведет: 'Коля', 'Вася', 'Петя':
    echo $user->name.' ';
}