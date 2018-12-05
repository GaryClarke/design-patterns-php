<?php

namespace Creational\FactoryMethod;

class FileLoggerFactory implements LoggerFactory {

    /**
     * @var string
     */
    private $filePath;

    /**
     * FileLoggerFactory constructor.
     *
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * @return FileLogger
     */
    public function createLogger()
    {
        return new FileLogger($this->filePath);
    }
}