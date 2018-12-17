<?php

use Behavioral\Command\Invoker;
use PHPUnit\Framework\TestCase;
use Behavioral\Command\Receiver;
use Behavioral\Command\HelloCommand;

class CommandTest extends TestCase {

    /** @test */
    function can_invoke_a_command()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();

        $this->assertEquals('Hello World', $receiver->getOutput());
    }
}