<?php

namespace Structural\Composite;

class Form implements RenderableInterface {

    /**
     * @var RenderableInterface[]
     */
    private $elements;

    public function render()
    {
        $formCode = '<form>';

        foreach ($this->elements as $element)
        {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}