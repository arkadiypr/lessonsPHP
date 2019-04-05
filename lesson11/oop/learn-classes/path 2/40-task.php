<?php
//Создайте класс AvgHelper с методом getAvg, который параметром будет принимать массив
//и возвращать среднее арифметическое этого массива (сумма элементов делить на количество).
//Добавьте в класс AvgHelper еще и метод getMeanSquare,
//который параметром будет принимать массив
//и возвращать среднее квадратичное этого массива
//(квадратный корень, извлеченный из суммы квадратов элементов, деленной на количество).
//Добавьте в класс Arr метод getAvgMeanSum, который будет находить сумму среднего арифметического и среднего квадратичного из массива $this->nums.

class AvgHelper
{
    public function getAvg(array $arr)
    {
        return array_sum($arr) / count($arr);
    }

    public function getMeanSquare(array $arr)
    {
        $sum2 = 0;

        foreach ($arr as $value) {
            $sum2 += $value * $value;
        }

        return sqrt($sum2 / count($arr));
    }
}

class Arr
{
    private $nums = [];
    private $avgHelper;

    public function __construct()
    {
        $this->avgHelper = new AvgHelper();
    }

    public function add($num)
    {
        $this->nums[] = $num;
    }

    public function getAvgMeanSum()
    {
        $nums = $this->nums;

        return $this->avgHelper->getAvg($nums) + $this->avgHelper->getMeanSquare($nums);

    }
}

$avg = new AvgHelper();
echo $avg->getAvg([4,5,12]); //7
echo '<br>';
echo $avg->getMeanSquare([8, 4, 3]);
echo '<br>';

$arr = new Arr();
$arr->add(1);
$arr->add(1);
$arr->add(1);
echo $arr->getAvgMeanSum();//2