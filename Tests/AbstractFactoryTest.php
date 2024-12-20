<?php

namespace Tests;

use Creationals\AbstractFactory\BenzCar;
use Creationals\AbstractFactory\BmwCar;
use Creationals\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase {
    public function testCanCreateBmwCar() {
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBmwCar();
        $this->assertInstanceOf(BmwCar::class, $myCar);
    }
    public function testCanCreateBenzCar() {
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBenzCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}