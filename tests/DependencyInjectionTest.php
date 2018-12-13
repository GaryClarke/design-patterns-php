<?php

use PHPUnit\Framework\TestCase;
use Structural\DependencyInjection\DatabaseConnection;
use Structural\DependencyInjection\DatabaseConfiguration;

class DependencyInjectionTest extends TestCase {

    /** @test */
    function dependencies_can_be_injected()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'GaryC', 'pa55word');

        $connection = new DatabaseConnection($config);

        $this->assertEquals('GaryC:pa55word@localhost:3306', $connection->getDsn());
    }
}