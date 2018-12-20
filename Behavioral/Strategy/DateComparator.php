<?php

namespace Behavioral\Strategy;

class DateComparator implements ComparatorInterface {

    /**
     * @param $a
     * @param $b
     *
     * @return int
     */
    public function compare($a, $b)
    {
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}