<?php

namespace Behavioral\Specification;

class AndSpecification implements SpecificationInterface {

    /** @var  SpecificationInterface[] */
    private $specifications;

    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy(Item $item)
    {
        foreach ($this->specifications as $specification) {

            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }

        return true;
    }
}