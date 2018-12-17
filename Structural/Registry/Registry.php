<?php

namespace Structural\Registry;

abstract class Registry {

    const LOGGER = 'logger';

    /**
     * @var array
     */
    private static $storedValues = [];

    private static $allowedKeys = [
        self::LOGGER,
    ];

    /**
     * @param string $key
     * @param $value
     *
     * @return void
     */
    public static function set(string $key, $value)
    {
        if (!in_array($key, self::$allowedKeys)) {

            throw new \InvalidArgumentException('Invalid key given');
        }

        self::$storedValues[$key] = $value;
    }


    /**
     * @param string $key
     * @return mixed
     */
    public static function get(string $key)
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$storedValues[$key])) {

            throw new \InvalidArgumentException('Invalid key given');
        }

        return self::$storedValues[$key];
    }
}