<?php

namespace Behavioral\Specification;

class OrSpecification implements SpecificationInterface {

    /** @var  SpecificationInterface[] */
    private $specifications;

    /**
     * OrSpecification constructor.
     *
     * @param SpecificationInterface[] ...$specifications
     */
    public function __construct(SpecificationInterface ...$specifications)
    {
       $this->specifications = $specifications;
    }

    public function isSatisfiedBy(Item $item)
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($item)) {
                return true;
            }
        }
        return false;
    }
}