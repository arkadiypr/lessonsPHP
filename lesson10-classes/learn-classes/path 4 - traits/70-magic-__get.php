<?php
//Задача :
//Сделайте класс Date с публичными свойствами year (год), month (месяц) и day (день).
//С помощью магии сделайте свойство weekDay, которое будет возвращать день недели, соответствующий дате.

class Date
{
    private $year;
    private $month;
    private $day;

    public function __construct($year, $month, $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function __get($property)
    {
        if($property == 'weekDay'){
            return date('w', mktime(0,0,0, $this->month, $this->day, $this->year));
        }
    }


}

$date = new Date(2019,04,05);
echo $date->weekDay;