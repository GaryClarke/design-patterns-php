<?php

namespace Structural\Composite;

class TextElement implements RenderableInterface {

    /**
     * @var
     */
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render()
    {
        return $this->text;
    }
}