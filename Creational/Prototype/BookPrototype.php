<?php

namespace Creational\Prototype;

abstract class BookPrototype {

    /**
     * @var string
     */
    protected $title;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}