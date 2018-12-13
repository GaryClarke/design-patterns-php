<?php

use PHPUnit\Framework\TestCase;
use Structural\FluentInterface\Sql;

class FluentInterfaceTest extends TestCase {

    /** @test */
    function can_build_sql()
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        $this->assertEquals('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}