<?php

use PHPUnit\Framework\TestCase;
use More\ServiceLocator\LogService;
use More\ServiceLocator\ServiceLocator;

class ServiceLocatorTest extends TestCase {

    /** @var ServiceLocator */
    private $serviceLocator;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->serviceLocator = new ServiceLocator();
    }

    /** @test */
    function it_has_services()
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        $this->assertTrue($this->serviceLocator->has(LogService::class));
        $this->assertFalse($this->serviceLocator->has(self::class));
    }

    /** @test */
    function get_will_instantiate_log_service_if_no_instance_has_been_created_yet()
    {
        $this->serviceLocator->addClass(LogService::class, []);
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf(LogService::class, $logger);
    }


}