<?php

use PHPUnit\Framework\TestCase;
use Creational\FactoryMethod\FileLogger;
use Creational\FactoryMethod\StdoutLogger;
use Creational\FactoryMethod\FileLoggerFactory;
use Creational\FactoryMethod\StdoutLoggerFactory;

class FactoryMethodTest extends TestCase {


    /** @test */
    function can_create_stdout_logging()
    {
        $loggerFactory = new StdoutLoggerFactory;

        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }


    /** @test */
    function can_create_file_logging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());

        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}