<?php

use Structural\Adapter\Book;
use Structural\Adapter\Kindle;
use PHPUnit\Framework\TestCase;
use Structural\Adapter\EBookAdapter;

class AdapterTest extends TestCase {

    /** @test */
        function can_turn_page_on_book()
    {
        $book = new Book();

        $book->open();
        
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    /** @test */
    function can_turn_page_on_kindle()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();

        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}