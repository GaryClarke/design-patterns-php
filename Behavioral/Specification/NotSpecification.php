<?php

namespace Behavioral\Specification;

class NotSpecification implements SpecificationInterface {

    /** @var  SpecificationInterface */
    private $specification;

    public function __construct(SpecificationInterface $specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(Item $item)
    {
        return !$this->specification->isSatisfiedBy($item);
    }
}