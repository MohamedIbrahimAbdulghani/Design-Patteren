<?php

namespace Creationals\Pool;

use DateTime;

class Car {
    private $rentDate;
    public function __construct()
    {
        $this->rentDate = new DateTime();
    }
    public function moveCar() {
        return "Car Is Moving";
    }
}