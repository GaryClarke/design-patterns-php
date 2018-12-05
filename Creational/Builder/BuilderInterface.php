<?php

namespace Creational\Builder;

interface BuilderInterface {

    public function createVehicle();

    public function addWheels();

    public function addEngine();

    public function addDoors();

    public function getVehicle();
}