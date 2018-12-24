<?php

use PHPUnit\Framework\TestCase;
use Behavioral\TemplateMethod\CityJourney;
use Behavioral\TemplateMethod\BeachJourney;

class TemplateMethodTest extends TestCase {

    /** @test */
    function template_beach_works()
    {
        $beachJourney = new BeachJourney();

        $beachJourney->takeTrip();

        $this->assertEquals(
            ['Buy a flight ticket', 'Taking the plane', 'Doing beach stuff', 'Taking the plane'],
            $beachJourney->getThingsToDo()
        );
    }

    /** @test */
    function template_city_works()
    {
        $cityJourney = new CityJourney();

        $cityJourney->takeTrip();

        $this->assertEquals([
            'Buy a flight ticket', 'Taking the plane', 'Take city photos', 'Buy a gift', 'Taking the plane',
        ], $cityJourney->getThingsToDo());
    }
}