<?php

namespace Behavioral\State;

class StateDone implements State {

    public function proceedToNext(OrderContext $orderContext)
    {

    }

    public function toString()
    {
        return 'done';
    }
}