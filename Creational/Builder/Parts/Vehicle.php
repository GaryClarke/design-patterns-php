<?php

namespace Creational\Builder\Parts;

abstract class Vehicle {

    /**
     * @var object[]
     */
    private $data = [];

    /**
     * @param $key
     * @param $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}