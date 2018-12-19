<?php

namespace Behavioral\Memento;

class Memento {

    /** @var State */
    private $state;

    /**
     * Memento constructor.
     *
     * @param State $stateToSave
     */
    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    public function getState()
    {
        return $this->state;
    }
}