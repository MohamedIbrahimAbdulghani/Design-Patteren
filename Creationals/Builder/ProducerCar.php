<?php

namespace Creationals\Builder;

class ProducerCar {
    private $Builder;
    public function __construct(CarBuilderInterface $builder)
    {
        $this->Builder = $builder;
    }
    public function ProducerCar() {
        $this->Builder->createCar();
        $this->Builder->addBody();
        $this->Builder->addEngine();
        $this->Builder->addDoor();
        $this->Builder->addWheel();
        return $this->Builder->getCar();
    }
}