<?php

use PHPUnit\Framework\TestCase;
use Behavioral\Mediator\Mediator;
use Behavioral\Mediator\Subsystem\Client;
use Behavioral\Mediator\Subsystem\Server;
use Behavioral\Mediator\Subsystem\Database;

class MediatorTest extends TestCase {

    /** @test */
    function correctly_outputs_data()
    {
        $client = new Client();

        new Mediator(new Server(), new Database(), $client);

        $this->expectOutputString('Hello World');

        $client->request();
    }
}