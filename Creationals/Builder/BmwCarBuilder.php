<?php

namespace Creationals\Builder;

use Creationals\Builder\Models\BmwCar;

class BmwCarBuilder implements CarBuilderInterface {
    private $type;
    public function createCar() {
        $this->type = new BmwCar();
    }
    public function addBody() {
        $this->type->setPart('BODY', 'bmw-body');
    }
    public function addEngine() {
        $this->type->setPart('ENGINE', 'bmw-engine');
    }
    public function addDoor() {
        $this->type->setPart('DOOR', 'bmw-door');
    }
    public function addWheel() {
        $this->type->setPart('WHEEL', 'bmw-wheel');
    }
    public function getCar() {
        return $this->type;
    }
}