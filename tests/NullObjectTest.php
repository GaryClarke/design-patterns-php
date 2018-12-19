<?php

use PHPUnit\Framework\TestCase;
use Behavioral\NullObject\Service;
use Behavioral\NullObject\NullLogger;
use Behavioral\NullObject\PrintLogger;

class NullObjectTest extends TestCase {

    /** @test */
    function null_object_returns_an_empty_string()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    /** @test */
    function standard_logger_returns_a_string()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}