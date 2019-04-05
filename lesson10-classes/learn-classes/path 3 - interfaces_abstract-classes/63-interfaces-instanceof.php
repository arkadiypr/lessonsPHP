<?php
//Задача :
//Сделайте интерфейс Figure3d (трехмерная фигура), который будет иметь метод getVolume (получить объем) и метод getSurfaceSquare (получить площадь поверхности).
//Сделайте класс Cube (куб), который будет реализовывать интерфейс Figure3d.


interface Figure3d
{
    public function getVolume();
    public function getSurfaceSquare();

}

class Cube implements Figure3d
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }


    public function getVolume()
    {
        return $this->a * $this->a * $this->a;
    }

    public function getSurfaceSquare()
    {
        return 6 * $this->a * $this->a;
    }
}

interface Figure
{
    public function getSquare();
    public function getPerimeter();
}

class Quadrate implements Figure
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getSquare()
    {
        return $this->a * $this->a;
    }

    public function getPerimeter()
    {
        return 4 * $this->a;
    }
}

class Rectangle implements Figure
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSquare()
    {
        return $this->a * $this->b;
    }

    public function getPerimeter()
    {
        return 2 * ($this->a + $this->b);
    }
}

//Создайте несколько объектов класса Quadrate, несколько объектов класса Rectangle и несколько объектов класса Cube. Запишите их в массив $arr в случайном порядке.

$quadrate1 = new Quadrate(5);
$quadrate2 = new Quadrate(3);

$rectangle1 = new Rectangle(2,3);
$rectangle2 = new Rectangle(3,4);

$cube1 = new Cube(3);
$cube2 = new Cube(4);

$arr = [$cube1, $rectangle2, $cube2, $quadrate1, $rectangle1, $quadrate2];

//Переберите циклом массив $arr и выведите на экран только площади объектов реализующих интерфейс Figure.
echo 'Переберите циклом массив $arr и выведите на экран только площади объектов реализующих интерфейс Figure.<br>';

foreach ($arr as $value) {
    if ($value instanceof Figure) {
        echo 'Площади фигуры интерфейса Figure: '.$value->getSquare().'<br>';
    }
}

//Переберите циклом массив $arr и выведите для плоских фигур их площади, а для объемных - площади их поверхности.

foreach ($arr as $value) {
    if ($value instanceof Figure) {
        echo 'Площадь плоской фигуры интерфейса Figure: '.$value->getSquare().'<br>';
    } elseif ($value instanceof Figure3d) {
        echo 'Площадь объемной фигуры интерфейса Figure: '.$value->getSurfaceSquare().'<br>';
    }
}

