<?php

use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase {

    /** @test */
    function it_renders_stuff()
    {
        $form = new \Structural\Composite\Form();
        $form->addElement(new \Structural\Composite\TextElement('Email:'));
        $form->addElement(new \Structural\Composite\InputElement());

        $embed = new \Structural\Composite\Form();
        $embed->addElement(new \Structural\Composite\TextElement('Password:'));
        $embed->addElement(new \Structural\Composite\InputElement());

        $form->addElement($embed);

        $this->assertEquals('<form>Email:<imput type="text"><form>Password:<imput type="text"></form></form>', $form->render());
    }
}