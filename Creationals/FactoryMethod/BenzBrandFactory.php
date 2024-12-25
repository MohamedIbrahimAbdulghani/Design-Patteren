<?php

namespace Creationals\FactroyMethod;

class BenzBrandFactory implements BrandFactoryInterface {
    public function BuildBrand() {
        return new BenzBrand();
    }
}