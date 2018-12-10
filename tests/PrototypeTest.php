<?php

use PHPUnit\Framework\TestCase;
use Creational\Prototype\BarBookPrototype;
use Creational\Prototype\FooBookPrototype;

class PrototypeTest extends TestCase {

    /** @test */
    function can_clone_prototypes()
    {
        $fooPrototype = new FooBookPrototype;
        $barPrototype = new BarBookPrototype;

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo book No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 10; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Foo book No ' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}