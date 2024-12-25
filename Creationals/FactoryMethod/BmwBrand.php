<?php

namespace Creationals\FactroyMethod;

class BmwBrand implements CarBuildInterface {
    public function createBrand()
    {
        return "BMW Brand";
    }
}