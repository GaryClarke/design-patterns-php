<?php

namespace Behavioral\State;

interface State {

    public function proceedToNext(OrderContext $orderContext);

    public function toString();
}