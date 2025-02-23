<?php

namespace Creationals\Pool;

class CarPool {
    private $freeCars =[];
    private $busyCars = [];

    public function rentCars() {
        if(count($this->freeCars) == 0 ) {
            $car = new Car;
        }
        else {
            $car = array_pop($this->freeCars);
        }
        $this->busyCars[spl_object_hash($car)] = $car;
        return $car;
    }

    public function freeCars(Car $car) {
        $carId = spl_object_hash($car);
        if(isset($this->busyCars[$carId])) {
            unset($this->busyCars[$carId]);
            $this->freeCars[$carId] = $car;
        }
    }

    public function getReport() {
        return count($this->freeCars) + count($this->busyCars);
    }
}