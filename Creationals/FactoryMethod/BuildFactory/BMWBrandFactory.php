<?php

namespace Creationals\FactoryMethod\BuildFactory;

use Creationals\FactoryMethod\BMWBrand;

class BMWBrandFactory implements BrandFactoryInterface {
    public function BuildBrand()
    {
        return new BMWBrand();
    }
}