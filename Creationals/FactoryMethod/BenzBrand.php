<?php

namespace Creationals\FactoryMethod;

class BenzBrand implements CarBrandInterface {
    public function createBrand()
    {
        return "Benz Brand";
    }
}