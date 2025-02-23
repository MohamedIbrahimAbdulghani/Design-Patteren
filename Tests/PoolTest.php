<?php

namespace Test;

use Creationals\Builder\Models\Car;
use Creationals\Pool\CarPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase {
    private $carPool;

    // protected function setUp() {
    //     parent::setUp();
    //     $this->carPool = new CarPool;
    // }
    public function testCanRentCar() {
        $this->carPool = new CarPool;
        $myCar = $this->carPool->rentCars();
        $this->assertInstanceOf(Car::class, $myCar);
        $this->assertEquals(1, $this->carPool->getReport());
    } 
}