<?php


namespace Creationals\StaticFactory;

class StaticFactory {
    public static function factory($type) {
        if($type === 'BMW') {
            return new BMWCar();
        } elseif($type === 'BENZ') {
            return new BENZCar();
        }
        return null;
    }
}