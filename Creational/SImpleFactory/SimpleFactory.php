<?php

namespace Creational\SimpleFactory;

class SimpleFactory {

    public function createCar()
    {
        return new Car;
    }
}