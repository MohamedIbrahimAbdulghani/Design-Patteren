<?php

namespace Creationals\SimpleFactory;

class CarFactory {
    public function createCar($type) {
        return new Car($type);
    }
}