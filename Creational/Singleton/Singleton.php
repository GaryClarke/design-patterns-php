<?php

namespace Creational\Singleton;

class Singleton {

    private static $uniqueInstance = null;

    public static function getInstance()
    {
        if (self::$uniqueInstance === null) {

            self::$uniqueInstance = new self;
        }

        return self::$uniqueInstance;
    }


    public function __construct()
    {

    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}