<?php

namespace Behavioral\State;

class StateCreated implements State {

    public function proceedToNext(OrderContext $orderContext)
    {
        $orderContext->setState(new StateShipped());
    }

    public function toString()
    {
        return 'created';
    }
}