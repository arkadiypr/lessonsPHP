<?php

class Student
{
    private $name;
    private $course = 1; // начальное значение курса

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер курса:
    public function getCourse()
    {
        return $this->course;
    }

    // Перевод студента на новый курс:
    public function transferToNextCourse()
    {
        $this->course++;
    }
}

class Arr
{
    private $numbers = []; // задаем начальное значение свойства как []

    public function add($num)
    {
        $this->numbers[] = $num;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

$arr = new Arr;
echo $arr->getSum();
echo '<br>';
$arr->add(1);
$arr->add(2);
$arr->add(3);
echo $arr->getSum();

