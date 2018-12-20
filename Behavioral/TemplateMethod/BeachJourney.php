<?php

namespace Behavioral\TemplateMethod;

class BeachJourney extends Journey {

    /**
     * This method must be implemented. This is the key feature of this pattern.
     *
     * @return string
     */
    protected function enjoyVacation()
    {
        return 'Doing beach stuff';
    }
}