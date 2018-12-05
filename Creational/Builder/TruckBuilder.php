<?php

namespace Creational\Builder;

use Creational\Builder\Parts\Truck;

class TruckBuilder implements BuilderInterface {

    /**
     * @var Truck
     */
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Truck;
    }

    public function addWheels()
    {
        // TODO: Implement addWheels() method.
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
    }

    public function getVehicle()
    {
        return $this->truck;
    }
}