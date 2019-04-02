<?php

//Реализуйте класс Arr.
//Метод add класса параметром должен принимать массив чисел.
//Все числа из этого массива должны добавляться в конец массива $this->numbers.
//Реализуйте метод getAvg, который будет находить среднее арифметическое переданных чисел.

class Arr
{
    private $numbers = []; // задаем начальное значение свойства как []

    public function add($arr)
    {
        $this->numbers = [];
        $this->numbers = array_merge($this->numbers, $arr);
    }

    public function getArr()
    {
        return $this->numbers;
    }

    public function getAvg()
    {
        return array_sum($this->numbers)/count($this->numbers);
    }
}

echo '<pre>';

$arr = new Arr;
$arr->add([1,2,6]);
print_r($arr->getArr());
echo $arr->getAvg();
$arr->add([1,2,3]);
print_r($arr->getArr());
echo $arr->getAvg();
