<?php

class Squere {
    private $side;

    public function __construct($a) {
        $this->side = $a;
    }

    public function __set($name, $value) {
        if ($name == 'area') {
            $this->setArea($value);
        } else if ($name == 'side') {
            $this->side = $value;
        }
    }

    public function __get($name) {
        if ($name == 'area') {
            return $this->getArea();
        } else if ($name == 'side') {
            return $this->side;
        }
    }
    private function getArea() {
        return $this->side * $this->side;
    }

    private function setArea($area) {
        return $this->side = sqrt($area);
    }

    public function __isset($name) {
        if ($name == 'area') {
            return true;
        }
        return false;
    }

    public function __unset($name) {
        if ($name == 'area') {
            $this->$name = null;
        }
    }
}

$squere = new Squere(25);
echo $squere->area;

var_dump(isset($p->area)); //  bool(true)

unset($p->area);
var_dump($p->area); // float(0)