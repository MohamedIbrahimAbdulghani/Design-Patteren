<?php

namespace Creationals\SimpleFactory;

class Car {
    private $type;
    public function __construct($type)
    {
        $this->type = $type;
    }
}