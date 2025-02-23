<?php

namespace Creationals\FactoryMethod;


class BENZBrandFactory implements BrandFactoryInterface {
    public function buildBrand()
    {
        return new BenzBrand();
    }
}