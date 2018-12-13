<?php

namespace Structural\Facade;

class Facade {

    /**
     * @var OsInterface
     */
    private $os;

    /**
     * @var BiosInterface
     */
    private $bios;

    /**
     * Facade constructor.
     *
     * @param BiosInterface $bios
     * @param OsInterface $os
     */
    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->bios = $bios;

        $this->os = $os;
    }


    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeypress();
        $this->bios->launch($this->os);
    }


    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}