<?php

namespace Tests;

use Creationals\SimpleFactory\Car;
use Creationals\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactory extends TestCase {
    public function testCanCreateCar() {
        $factory = new CarFactory();
        $BMWCar = $factory->createCar('BMW');
        $this->assertInstanceOf(Car::class, $BMWCar);
    }
}