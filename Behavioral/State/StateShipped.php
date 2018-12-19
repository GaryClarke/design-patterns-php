<?php

namespace Behavioral\State;

class StateShipped implements State {

    public function proceedToNext(OrderContext $orderContext)
    {
        $orderContext->setState(new StateDone());
    }

    public function toString()
    {
        return 'shipped';
    }
}