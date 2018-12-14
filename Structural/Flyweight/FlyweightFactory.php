<?php

namespace Structural\Flyweight;

class FlyweightFactory implements \Countable {

    /**
     * @var CharacterFlyweight[]
     */
    private $pool = [];

    public function get(string $name)
    {
        if (!isset($this->pool[$name])) {

            $this->pool[$name] = new CharacterFlyweight($name);
        }

        return $this->pool[$name];
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->pool);
    }
}