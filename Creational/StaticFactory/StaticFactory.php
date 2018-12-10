<?php

namespace Creational\StaticFactory;

class StaticFactory {

    public static function factory(string $type)
    {
        if ($type === 'number') {

            return new FormatNumber;
        }

        if ($type === 'string') {

            return new FormatString;
        }

        throw new \InvalidArgumentException('Type must be number or string');
    }
}