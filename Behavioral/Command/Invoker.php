<?php

namespace Behavioral\Command;

class Invoker {

    /**
     * @var CommandInterface
     */
    private $command;

    /**
     * Command could be replaced with a commands list
     *
     * @param CommandInterface $command
     */
    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
}