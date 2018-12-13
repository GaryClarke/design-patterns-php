<?php

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase {

    /** @test */
    function system_can_be_hidden_behind_a_facade()
    {
        /** @var \Structural\Facade\OsInterface|\PHPUnit\Framework\MockObject\MockObject $os */
        $os = $this->createMock(\Structural\Facade\OsInterface::class);

        $os->method('getName')->willReturn('Linux');

        $bios = $this->getMockBuilder(\Structural\Facade\BiosInterface::class)
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new \Structural\Facade\Facade($bios, $os);

        $facade->turnOn();

        $this->assertEquals('Linux', $os->getName());
    }
}