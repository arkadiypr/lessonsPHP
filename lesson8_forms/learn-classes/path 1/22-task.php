<?php
//Сделайте класс User, у которого будут приватные свойства surname (фамилия), name (имя) и patronymic (отчество).
//Эти свойства должны задаваться с помощью соответствующих сеттеров.
//Сделайте так, чтобы эти сеттеры вызывались цепочкой в любом порядке,
//а самым последним методом в цепочке можно было вызвать метод getFullName, который вернет ФИО юзера (первую букву фамилии, имени и отчества).
//Пример:

class User

{
    private $name;
    private $surname;
    private $patronymic;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;

    }

    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
        return $this;

    }

    public function getFullName()
    {
        return $this->surname[0].$this->name[0].$this->patronymic[0];
    }


}

echo (new User)->setName('Nicola')->setPatronymic('Ivanovich')
        ->setSurname('Petrov')->getFullName(); // выведет 'ПНИ'

