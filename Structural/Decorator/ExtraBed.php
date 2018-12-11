<?php

namespace Structural\Decorator;

class ExtraBed extends BookingDecorator {

    private const PRICE = 2;

    public function calculatePrice()
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription()
    {
        return $this->booking->getDescription() . ' plus extra bed';
    }
}