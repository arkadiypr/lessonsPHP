<?php

//Сделайте класс Product (товар),
//в котором будут приватные свойства name (название товара), price (цена за штуку) и quantity.+
//Пусть все эти свойства будут доступны только для чтения.+
//Добавьте в класс Product метод getCost,
//который будет находить полную стоимость продукта (сумма умножить на количество).+
//Сделайте класс Cart (корзина).+
//Данный класс будет хранить список продуктов (объектов класса Product) в виде массива.+
//Пусть продукты хранятся в свойстве products.+
//Реализуйте в классе Cart метод add для добавления продуктов.+
//Реализуйте в классе Cart метод remove для удаления продуктов. Метод должен принимать параметром название удаляемого продукта.+
//Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов.+
//Реализуйте в классе Cart метод getTotalQuantity, который будет находить суммарное количество продуктов (то есть сумму свойств quantity всех продуктов).+
//Реализуйте в классе Cart метод getAvgPrice, который будет находить среднюю стоимость продуктов (суммарная стоимость делить на количество всех продуктов).+

class Product
{
    private $name;
    private $price;
    public $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getCost()
    {
        return $this->price * $this->quantity;
    }

}

class Cart
{
    private $products = [];

    // TODO: если добавляем существующий товар то увеличивается кол-во

    public function addProduct($name, $price, $quantity)
    {
        $product = new Product($name, $price, $quantity);
        if (!$this->exists($product)) {
            $this->products[] = $product;
        }
    }

    public function get()
    {
        return $this->products;
    }

    public function removeProduct($nameProduct)
    {
        foreach ($this->products as $key => $product) {
            if ($product->getName() == $nameProduct) {
                unset($this->products[$key]);
            }
        }
    }

    public function getTotalCost()
    {
        $totalCost = 0;
        foreach ($this->products as $product) {
            $totalCost += $product->getCost();
        }

        return $totalCost;
    }

    public function getTotalQuantity()
    {
        $totalQuantity = 0;
        foreach ($this->products as $product) {
            $totalQuantity += $product->getQuantity();
        }

        return $totalQuantity;
    }

    public function getAvgPrice()
    {
        $AvgPrice = $this->getTotalCost() / $this->getTotalQuantity();

        return "Avg price: {$AvgPrice}";
    }

    private function exists($newProduct)
    {
        foreach ($this->products as $product) {
            if ($product == $newProduct) {
                return true;
            }
        }

        return false;
    }

    public function addQuantity($nameProduct)
    {
        foreach ($this->products as $key => $product) {
            if ($nameProduct == $product->getName()) {
                $product->quantity++;
            }
        }
    }
}

echo '<pre>';
$cart = new Cart();
$cart->addProduct('Phone1', 1000, 2);
$cart->addProduct('Phone2', 3000, 1);
$cart->addProduct('Phone3', 2000, 1);
$cart->addProduct('Phone4', 1500, 3);
//$cart->addQuantity('Phone5');

$cart->removeProduct('Phone2');
echo '<br>';
print_r($cart->get());
echo '<br>';
echo 'Total cost: '.$cart->getTotalCost();//8500
echo '<br>';
echo 'Total quantity: '.$cart->getTotalQuantity();//6
echo '<br>';
echo $cart->getAvgPrice();//1416
