<?php

namespace Creationals\Builder;

class BmwCarBuilder implements CarBuilderInterface {
    private $type;
    public function createCar() {
        $this->type = new BmwCar();
    }
    public function addEngine() {
        $this->type->setPart('BM - ENGINE', 'bm - engine');
    }
    public function addDoor() {
        $this->type->setPart('BM -DOOR', 'bm - door');
    }
    public function addBody() {
        $this->type->setPart('BM - BODY', 'bm - body');
    }
    public function addWheel() {
        $this->type->setPart('BM - WHEEL', 'bm - wheel');
    }
    public function getCar() {
        return $this->type;
    }
}