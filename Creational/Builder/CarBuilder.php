<?php

namespace Creational\Builder;

use Creational\Builder\Parts\Car;

class CarBuilder implements BuilderInterface {

    /**
     * @var Car
     */
    private $car;

    public function createVehicle()
    {
        $this->car = new Car;
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
        return $this->car;
    }
}