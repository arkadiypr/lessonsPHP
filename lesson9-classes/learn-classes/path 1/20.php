<?php

class Arr
{
    public $numbers = [];

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function addElement($number)
    {
        $this->numbers[] = $number;
        return $this;
    }

    public function getSum()
    {
     return array_sum($this->numbers);
    }
}

echo (new Arr([1,2,3]))->addElement(4)->getSum();