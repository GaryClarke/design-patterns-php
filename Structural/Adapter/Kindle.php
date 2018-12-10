<?php

namespace Structural\Adapter;

class Kindle implements EBookInterface {

    private $page = 1;

    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {

    }

    public function getPage()
    {
        return [$this->page, $this->totalPages];
    }
}