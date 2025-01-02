<?php

namespace Tests;

use Creationals\FactoryMethod\BenzBrand;
use Creationals\FactoryMethod\BMWBrand;
use Creationals\FactoryMethod\BuildFactory\BMWBrandFactory;
use Creationals\FactoryMethod\BuildFactory\BenzBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase {
    public function testCanBuildBMWBrand() {
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf(BMWBrand::class, $myBrand);
    }

    public function testCanBuildBenzBrand() {
        $brandFactory = new BenzBrandFactory();
        $myBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf(BenzBrand::class, $myBrand);
    }
}