<?php

namespace Behavioral\TemplateMethod;

class CityJourney extends Journey {

    /**
     * This method must be implemented. This is the key feature of this pattern.
     *
     * @return string
     */
    protected function enjoyVacation()
    {
        return 'Take city photos';
    }

    protected function buyGift()
    {
        return 'Buy a gift';
    }
}