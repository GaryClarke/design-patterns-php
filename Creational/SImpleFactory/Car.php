<?php

namespace Creational\SimpleFactory;

class Car {

    public function driveTo($location)
    {
        echo 'Driving to ' . $location;
    }
}