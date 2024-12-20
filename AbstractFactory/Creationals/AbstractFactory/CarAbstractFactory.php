<?php
namespace Creationals\AbstractFactory;

class CarAbstractFactory {
    private $price;
    private $tax;
    public function __construct($price)
    {
        $this->price = $price;
    }
    public function createBmwCar() {
        return new BmwCar($this->price);
    }
    public function createBenzCar() {
        return new BenzCar($this->price, $this->tax);
    }
}