<?php


namespace Creationals\Observer;

use SplObserver;
use SplSubject;

class Casher implements SplObserver {
    private $state;
    public function update(SplSubject $subject)
    {
        $this->state = sprintf('Casher is ready for order number %s', $subject->getOrderNumber());
    }
}