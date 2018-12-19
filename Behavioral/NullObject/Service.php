<?php

namespace Behavioral\NullObject;

class Service {

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Service constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * do something
     */
    public function doSomething()
    {
        $this->logger->log('We are in ' . __METHOD__);
    }
}