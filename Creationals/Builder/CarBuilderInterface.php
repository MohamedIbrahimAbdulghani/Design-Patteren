<?php

namespace Creationals\Builder;

interface CarBuilderInterface {
    public function createCar();
    public function addEngine();
    public function addDoor();
    public function addBody();
    public function addWheel();
    public function getCar();
}