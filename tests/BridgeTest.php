<?php

use PHPUnit\Framework\TestCase;
use Structural\Bridge\HtmlFormatter;
use Structural\Bridge\HelloWorldService;
use Structural\Bridge\PlainTextFormatter;

class BridgeTest extends TestCase {

    /** @test */
    function can_decouple_an_abstraction_from_its_implementation()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertEquals('Hello World', $service->get());

        $service->setImplementation(new HtmlFormatter());

        $this->assertEquals('<p>Hello World</p>', $service->get());
    }
}