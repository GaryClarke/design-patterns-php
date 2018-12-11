<?php

use PHPUnit\Framework\TestCase;
use Structural\Decorator\DoubleRoomBooking;

class DecoratorTest extends TestCase {

    /** @test */
    function can_calculate_basic_price()
    {
        $booking = new DoubleRoomBooking();

        $this->assertEquals(40, $booking->calculatePrice());

        $this->assertEquals('Double room', $booking->getDescription());
    }


    /** @test */
    function can_calculate_price_plus_extra_bed()
    {
        $booking = new DoubleRoomBooking();

        $booking = new \Structural\Decorator\ExtraBed($booking);
        $booking = new \Structural\Decorator\Wifi($booking);

        $this->assertEquals(47, $booking->calculatePrice());

        $this->assertEquals('Double room plus extra bed plus wifi', $booking->getDescription());
    }
}