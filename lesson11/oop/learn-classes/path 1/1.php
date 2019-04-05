<?php

class User
{
    public $name;
    public $age;

    public function show(string $str) {

        $str .= '!!!';
        return $str;
    }
}

$user1 = new User();
$user1->name = 'Mike';
$user1->age = 25;

$user2 = new User();
$user2->name = 'Pol';
$user2->age = 24;

echo '<br>';
echo $user1->age + $user2->age;
echo '<br>';
echo $user1->show('Hello');