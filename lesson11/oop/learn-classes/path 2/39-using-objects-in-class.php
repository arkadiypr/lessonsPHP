<?php
class SumHelper
{
    // Сумма квадратов:
    public function getSum2($arr)
    {
        return $this->getSum($arr, 2);
    }

    // Сумма кубов:
    public function getSum3($arr)
    {
        return $this->getSum($arr, 3);
    }

    // Вспомогательная функция для нахождения суммы:
    private function getSum($arr, $power) {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
}

class Arr
{
    private $nums = [];
    private $sumHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper();
    }

    // Добавляем число в массив:
    public function add($num)
    {
        $this->nums[] = $num;
    }

    public function getSum23()
    {
        $nums = $this->nums;

        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

}

$arr = new Arr(); // создаем объект

$arr->add(1); // добавляем в массив число 1
$arr->add(2); // добавляем в массив число 2
$arr->add(3); // добавляем в массив число 3

// Находим сумму квадратов и кубов:
echo $arr->getSum23(); //50