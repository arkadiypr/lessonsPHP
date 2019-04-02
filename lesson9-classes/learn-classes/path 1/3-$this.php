<?php

class User
{
    public $name;
    public $age;

    public function show() {

        return $this->name;
    }
}

$user1 = new User();
$user1->name = 'Mike';
$user1->age = 25;

$user2 = new User();
$user2->name = 'Pol';
$user2->age = 24;

echo '<br>';
echo $user1->show();