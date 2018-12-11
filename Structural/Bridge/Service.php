<?php

namespace Structural\Bridge;

abstract class Service {

    protected $implementation;

    /**
     * Service constructor.
     *
     * @param FormatterInterface $printer
     */
    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }


    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}