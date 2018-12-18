<?php

namespace Behavioral\Mediator\Subsystem;

use Behavioral\Mediator\Colleague;

class Server extends Colleague {

    public function process()
    {
        $data = $this->mediator->queryDb();

        $this->mediator->sendResponse(sprintf("Hello %s", $data));
    }
}