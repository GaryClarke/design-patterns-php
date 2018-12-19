<?php

use PHPUnit\Framework\TestCase;
use Behavioral\State\OrderContext;

class StateTest extends TestCase {

    /** @test */
    function is_created_with_state_created()
    {
        $orderContext = OrderContext::create();

        $this->assertEquals('created', $orderContext->toString());
    }

    /** @test */
    function can_proceed_to_state_shipped()
    {
        $orderContext = OrderContext::create();
        $orderContext->proceedToNext();

        $this->assertEquals('shipped', $orderContext->toString());
    }

    /** @test */
    function can_proceed_to_state_done()
    {
        $orderContext = OrderContext::create();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();

        $this->assertEquals('done', $orderContext->toString());
    }

    /** @test */
    function state_done_is_the_last_possible_state()
    {
        $orderContext = OrderContext::create();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();
        $orderContext->proceedToNext();

        $this->assertEquals('done', $orderContext->toString());
    }
}