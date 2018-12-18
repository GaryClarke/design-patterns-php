<?php

namespace Behavioral\Mediator\Subsystem;

use Behavioral\Mediator\Colleague;

class Database extends Colleague {

    public function getData()
    {
        return 'World';
    }
}