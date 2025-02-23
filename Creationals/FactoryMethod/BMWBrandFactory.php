<?php

namespace Creationals\FactoryMethod;


class BMWBrandFactory implements BrandFactoryInterface {
    public function buildBrand()
    {
        return new BMWBrand();
    }
}