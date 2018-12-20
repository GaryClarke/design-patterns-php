<?php

namespace Behavioral\Strategy;

class IdComparator implements ComparatorInterface {

    public function compare($a, $b)
    {
        return $a['id'] <=> $b['id'];
    }
}