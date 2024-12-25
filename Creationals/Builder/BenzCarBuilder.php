<?php

namespace Creationals\Builder;

use Creationals\Builder\Models\BenzCar;

class BenzCarBuilder implements CarBuilderInterface {
    private $type;
    public function createCar() {
        $this->type = new BenzCar();
    }
    public function addBody() {
        $this->type->setPart('BODY', 'benz-body');
    }
    public function addEngine() {
        $this->type->setPart('ENGINE', 'benz-engine');
    }
    public function addDoor() {
        $this->type->setPart('DOOR', 'benz-door');
    }

    public function addWheel() {
        $this->type->setPart('WHEEL', 'benz-wheel');
    }
    public function getCar() {
        return $this->type;
    }
}