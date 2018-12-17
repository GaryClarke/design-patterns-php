<?php

use PHPUnit\Framework\TestCase;
use Structural\Registry\Registry;

class RegistryTest extends TestCase {

    /** @test */
    function can_get_and_set_logger()
    {
        $key = Registry::LOGGER;

        $logger = new stdClass();

        Registry::set($key, $logger);

        $storedLogger = Registry::get($key);

        $this->assertSame($logger, $storedLogger);

        $this->assertInstanceOf(stdClass::class, $storedLogger);
    }


    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    function throws_exception_when_trying_to_set_invalid_key()
    {
        Registry::set('foobar', new stdClass());
    }


    /**
     * @test
     * @runInSeparateProcess
     * @expectedException InvalidArgumentException
     */
    function throws_exception_when_trying_to_get_not_set_key()
    {
        Registry::get(Registry::LOGGER);
    }
}