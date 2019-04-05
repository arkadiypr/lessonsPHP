<?php

class Point {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function __get($name) {
        echo "Произошло обращение к свойству $name<br />";
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
        echo "Cвойству  $name присвоено значение $value ";
    }
}

$p = new Point(8, 16);
$p->x = 10;
$p->y = 20;
$p->z = 30;