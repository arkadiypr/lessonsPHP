<?php

//Добавьте в класс Arr еще один метод append,
//который параметром будет принимать массив чисел и добавлять эти числа в конец массива, хранящегося в объекте.
//Предполагается, что методы add и append можно будет использовать в любом порядке:



class Arr
{
    public $numbers;

    public function __construct()
    {
        $this->numbers = [];
    }

    public function add($number)
    {
        $this->numbers[] = $number;
        return $this;
    }

    public function append(array $array)
    {
        $this->numbers = array_merge($this->numbers, $array);
        return $this;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

echo (new Arr())->add(1)->append([2, 3, 4])->add(5)->getSum(); //15
