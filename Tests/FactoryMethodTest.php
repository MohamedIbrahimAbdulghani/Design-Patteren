<?php

namespace Tests;

use Creationals\FactroyMethod\BmwBrand;
use Creationals\FactroyMethod\BmwBrandFactory;
use Creationals\FactroyMethod\BenzBrand;
use Creationals\FactroyMethod\BenzBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase {
    public function testCanBuildBmwBrand() {
        $brandFactory = new BmwBrandFactory();
        $myBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf(BmwBrand::class, $myBrand);
    }

    public function testCanBuildBenzBrand() {
        $brandFactory = new BenzBrandFactory();
        $myBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf(BenzBrand::class, $myBrand);
    }
}