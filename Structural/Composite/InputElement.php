<?php

namespace Structural\Composite;

class InputElement implements RenderableInterface {

    public function render()
    {
        return '<imput type="text">';
    }
}