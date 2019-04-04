<?php
//Сделайте класс Product (продукт), в котором будут следующие свойства: name (название продукта), price (цена).
//Создайте объект класса Product, запишите его в переменную $product1.
//Присвойте значение переменной $product1 в переменную $product2.
//Проверьте то, что обе переменные ссылаются на один и тот же объект.

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

}

$product1 = new Product('Phone', 1500);

$product2 = $product1;

$product1->name = 'Notebook1';
$product2->name = 'Notebook2';

echo $product1->name == $product2->name;
echo '<br>';
echo $product1->price == $product2->price;