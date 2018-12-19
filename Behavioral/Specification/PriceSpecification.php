<?php

namespace Behavioral\Specification;

class PriceSpecification implements SpecificationInterface {

    /** @var  float|null */
    private $maxPrice;

    /** @var  float|null */
    private $minPrice;

    /**
     * PriceSpecification constructor.
     *
     * @param $minPrice
     * @param $maxPrice
     */
    public function __construct($minPrice, $maxPrice)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    public function isSatisfiedBy(Item $item)
    {
        if ($this->maxPrice !== null && $item->getPrice() > $this->maxPrice) {
            return false;
        }

        if ($this->minPrice !== null && $item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;
    }
}