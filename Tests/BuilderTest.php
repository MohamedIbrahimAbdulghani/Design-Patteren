<?php

namespace Creationals\Builder;

use PHPUnit\Framework\TestCase;
use Creationals\Builder\Models\BmwCar;
use Creationals\Builder\Models\BenzCar;
use Creationals\Builder\ProducerCar;

class BuilderTest extends TestCase {
    public function testProduceBMWCar() {
        $Builder = new BmwCarBuilder();
        $carProducer = new ProducerCar($Builder);
        $myCar = $carProducer->ProducerCar();
        $this->assertInstanceOf(BmwCar::class, $myCar);
    }
    public function testProduceBENZCar() {
        $Builder = new BenzCarBuilder();
        $carProducer = new ProducerCar($Builder);
        $myCar = $carProducer->ProducerCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}