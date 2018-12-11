<?php

namespace Structural\Decorator;

class Wifi extends BookingDecorator {

    private const PRICE = 5;

    public function calculatePrice()
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription()
    {
        return $this->booking->getDescription() . ' plus wifi';
    }
}