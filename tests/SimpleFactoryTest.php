<?php

use PHPUnit\Framework\TestCase;
use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends TestCase {

    /** @test */
    function can_create_car()
    {
        $car = (new SimpleFactory)->createCar();

        $this->assertInstanceOf(Car::class, $car);
    }
}