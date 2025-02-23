<?php

namespace Tests;

use Creationals\FactoryMethod\BenzBrand;
use Creationals\FactoryMethod\BENZBrandFactory;
use Creationals\FactoryMethod\BMWBrand;
use Creationals\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase {
    public function testCanBuildBMWBrand() {
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->buildBrand();
        $this->assertInstanceOf(BMWBrand::class, $myBrand);
    }

    public function testCanBuildBENZBrand() {
        $brandFactory = new BENZBrandFactory();
        $myBrand = $brandFactory->buildBrand();
        $this->assertInstanceOf(BenzBrand::class, $myBrand);
    }
}