<?php

namespace Creational\FactoryMethod;

class StdoutLoggerFactory implements LoggerFactory {

    public function createLogger()
    {
        return new StdoutLogger();
    }
}