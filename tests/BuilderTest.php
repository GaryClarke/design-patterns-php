<?php

use PHPUnit\Framework\TestCase;
use Creational\Builder\Director;
use Creational\Builder\Parts\Car;
use Creational\Builder\CarBuilder;
use Creational\Builder\Parts\Truck;
use Creational\Builder\TruckBuilder;

class BuilderTest extends TestCase {

    /** @test */
    function can_build_truck()
    {
        $truckBuilder = new TruckBuilder;

        $director = new Director;

        $newVehicle = $director->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }


    /** @test */
    function can_build_car()
    {
        $carBuilder = new CarBuilder;

        $director = new Director;

        $newVehicle = $director->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}