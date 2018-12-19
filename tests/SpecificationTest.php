<?php

use PHPUnit\Framework\TestCase;
use Behavioral\Specification\Item;
use Behavioral\Specification\OrSpecification;
use Behavioral\Specification\AndSpecification;
use Behavioral\Specification\NotSpecification;
use Behavioral\Specification\PriceSpecification;

class SpecificationTest extends TestCase {

    /** @test */
    function can_or()
    {
        $spec1 = new PriceSpecification(50,99);
        $spec2 = new PriceSpecification(101,200);

        $orSpec = new OrSpecification($spec1, $spec2);

        $this->assertFalse($orSpec->isSatisfiedBy(new Item(100)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(51)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(150)));
    }

    /** @test */
    function can_and()
    {
        $spec1 = new PriceSpecification(50, 100);
        $spec2 = new PriceSpecification(80, 200);

        $andSpec = new AndSpecification($spec1, $spec2);

        $this->assertFalse($andSpec->isSatisfiedBy(new Item(150)));
        $this->assertFalse($andSpec->isSatisfiedBy(new Item(1)));
        $this->assertFalse($andSpec->isSatisfiedBy(new Item(51)));
        $this->assertTrue($andSpec->isSatisfiedBy(new Item(100)));
    }

    /** @test */
    function can_not()
    {
        $spec1 = new PriceSpecification(50, 100);
        $notSpec = new NotSpecification($spec1);

        $this->assertTrue($notSpec->isSatisfiedBy(new Item(150)));
        $this->assertFalse($notSpec->isSatisfiedBy(new Item(50)));
    }
}