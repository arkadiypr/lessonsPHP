<?php

include '58-interfaces.php';

//Задача : Добавьте в класс FiguresCollection метод getTotalPerimeter для нахождения суммарного периметра всех фигур.

class FiguresCollection
{
    private $figures = [];

    public function addFigure(Figure $figure)
    {
        $this->figures[] = $figure;
    }

    /// Найдем полную площадь:
    public function getTotalSquare()
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getSquare(); // используем метод getSquare
        }

        return $sum;
    }

    public function getTotalPerimeter()
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getPerimeter();
        }

        return $sum;
    }
}

$figuresCollection = new FiguresCollection;

// Добавим парочку квадратов:
$figuresCollection->addFigure(new Quadrate(2));
$figuresCollection->addFigure(new Quadrate(3));

// Добавим парочку прямоугольников:
$figuresCollection->addFigure(new Rectangle(2, 3));
$figuresCollection->addFigure(new Rectangle(3, 4));

echo '<br>';
echo $figuresCollection->getTotalPerimeter();
echo '<br>';
echo $figuresCollection->getTotalSquare();

