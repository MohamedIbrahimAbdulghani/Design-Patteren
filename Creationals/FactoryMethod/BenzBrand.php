<?php

namespace Creationals\FactroyMethod;

class BenzBrand implements CarBuildInterface {
    public function createBrand()
    {
        return "Benz Brand";
    }
}