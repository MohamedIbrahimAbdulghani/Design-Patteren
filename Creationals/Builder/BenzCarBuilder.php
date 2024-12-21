<?php

namespace Creationals\Builder;

class BenzCarBuilder implements CarBuilderInterface {
    private $type;
    public function createCar() {
        $this->type = new BenzCar();
    }
    public function addEngine() {
        $this->type->setPart('BEN - ENGINE', 'ben - engine');
    }
    public function addDoor() {
        $this->type->setPart('BEN -DOOR', 'ben - door');
    }
    public function addBody() {
        $this->type->setPart('BEN - BODY', 'ben - body');
    }
    public function addWheel() {
        $this->type->setPart('BEN - WHEEL', 'ben - wheel');
    }
    public function getCar() {
        return $this->type;
    }
}