<?php

namespace Creationals\FactroyMethod;


class BmwBrandFactory implements BrandFactoryInterface {
    public function BuildBrand()
    {
        return new BmwBrand();
    }
}