<?php

namespace Behavioral\Strategy;

class Context {

    /** @var ComparatorInterface */
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements)
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}