<?php

namespace Creational\FactoryMethod;

class FileLogger implements Logger {

    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filepath)
    {
        $this->filePath = $filepath;
    }

    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}