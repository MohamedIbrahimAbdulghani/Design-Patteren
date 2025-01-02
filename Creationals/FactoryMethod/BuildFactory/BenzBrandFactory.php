<?php

namespace Creationals\FactoryMethod\BuildFactory;

use Creationals\FactoryMethod\BenzBrand;

class BenzBrandFactory implements BrandFactoryInterface {
    public function BuildBrand()
    {
        return new BenzBrand();
    }
}