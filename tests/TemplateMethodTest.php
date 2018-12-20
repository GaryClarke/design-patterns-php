<?php

use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase {

    /** @test */
    function template_beach_works()
    {
        $beachJourney = new BeachJourney();

        $beachJourney->takeTrip();
    }

    /** @test */
    function template_city_works()
    {
        $cityJourney = new CityJourney();

        $cityJourney->takeTrip();
    }
}