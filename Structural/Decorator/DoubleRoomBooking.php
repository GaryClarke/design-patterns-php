<?php

namespace Structural\Decorator;

class DoubleRoomBooking implements Booking {

    public function calculatePrice()
    {
        return 40;
    }

    public function getDescription()
    {
        return 'Double room';
    }
}