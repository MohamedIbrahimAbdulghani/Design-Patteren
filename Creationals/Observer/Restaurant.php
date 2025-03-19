<?php

namespace Creationals\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Restaurant implements SplSubject {
    private $observers;
    private $orderNumber = 0;
    public function __construct() {
        $this->observers = new SplObjectStorage();
    }
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }
    public function notify()
    {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }
    public function addNewOrder() {
        $this->orderNumber += 1;
    }
    public function getOrderNumber() {
        return $this->orderNumber;
    }
}