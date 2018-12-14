<?php

namespace Structural\Flyweight;

class CharacterFlyweight implements FlyweightInterface {

    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function render(string $font)
    {
        return sprintf('Character %s with font %s', $this->name, $font);
    }
}