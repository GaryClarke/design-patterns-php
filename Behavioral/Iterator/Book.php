<?php

namespace Behavioral\Iterator;

class Book {

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $title;


    public function __construct(string $title, string $author)
    {
        $this->author = $author;
        $this->title = $title;
    }


    public function getAuthor()
    {
        return $this->author;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function getAuthorAndTitle()
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}