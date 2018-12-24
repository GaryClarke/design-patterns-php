<?php

namespace Behavioral\TemplateMethod;

abstract class Journey {

    /** @var string[] */
    private $thingsToDo = [];

    /**
     * Freeze the global behaviour of the algorithm.
     */
    final public function takeTrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();
        $buyGift = $this->buyGift();

        if ($buyGift !== null) {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }

    /**
     * This method must be implemented. This is the key feature of this pattern.
     *
     * @return string
     */
    abstract protected function enjoyVacation();

    /**
     * This method is also part of the algorithm but it is optional.
     * @return null|string
     */
    protected function buyGift()
    {
        return null;
    }

    private function buyAFlight()
    {
        return 'Buy a flight ticket';
    }

    private function takePlane()
    {
        return 'Taking the plane';
    }

    public function getThingsToDo()
    {
        return $this->thingsToDo;
    }
}