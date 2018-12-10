<?php

namespace Structural\Adapter;

class Book implements BookInterface {

    private $page;

    public function turnPage()
    {
        $this->page++;
    }

    public function open()
    {
        $this->page = 1;
    }

    public function getPage()
    {
        return $this->page;
    }
}