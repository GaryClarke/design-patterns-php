<?php

use PHPUnit\Framework\TestCase;
use Creational\StaticFactory\FormatNumber;
use Creational\StaticFactory\FormatString;
use Creational\StaticFactory\StaticFactory;

class StaticFactoryTest extends TestCase {

    /** @test */
    function can_create_number_formatter()
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    /** @test */
    function can_create_string_formatter()
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    /** @test */
    function invalid_argument_exception_is_thrown_if_arg_not_number_or_string()
    {
        try {

            StaticFactory::factory('bogus_value');

            $this->fail('An invalid argument should have been thrown');

        } catch (InvalidArgumentException $exception) {

            $this->assertEquals('Type must be number or string', $exception->getMessage());
        }
    }
}