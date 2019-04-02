<?php

// Модифицируйте код класса User так, чтобы в методе setName выполнялась проверка того, что длина имени более 3-х символов.

class User
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (strlen($name) > 3) {
            $this->name = $name;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        // Выполняем проверку возраста:
        if ($age >= 18) {
            $this->age = $age;
        }
    }
}

//Добавьте в класс Student метод setName, в котором будет выполняться проверка того,
//что длина имени более 3-х символов и менее 10 символов.
//Пусть метод setName класса Student использует метод setName своего родителя, чтобы выполнить часть проверки.

class Student extends User
{
    private $course;

    public function setAge($age)
    {
        // Если возраст меньше или равен 25:
        if ($age <= 25) {
            // Вызываем метод родителя:
            parent::setAge($age); // в родителе выполняется проверка age >= 18
        }
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function setName($name)
    {
        if (strlen($name) <= 10) {
            parent::setName($name);
        }
    }
}

$student = new Student();
$student->setName('Ivan');
$student->setName('Anton');

echo $student->getName();