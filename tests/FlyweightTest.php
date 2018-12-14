<?php

use PHPUnit\Framework\TestCase;
use Structural\Flyweight\FlyweightFactory;

class FlyweightTest extends TestCase {

    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    private $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    /** @test */
    function flyweight()
    {
        $factory = new FlyweightFactory();

        foreach ($this->characters as $char) {

            foreach ($this->fonts as $font) {

                $flyweight = $factory->get($char);

                $rendered = $flyweight->render($font);

                $this->assertEquals(sprintf('Character %s with font %s', $char, $font), $rendered);
            }
        }

        $this->assertCount(count($this->characters), $factory);
    }
}