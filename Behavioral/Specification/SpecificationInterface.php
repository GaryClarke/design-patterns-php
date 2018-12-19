<?php

namespace Behavioral\Specification;

interface SpecificationInterface {

    public function isSatisfiedBy(Item $item);
}