<?php

use Behavioral\Iterator\Book;
use PHPUnit\Framework\TestCase;
use Behavioral\Iterator\Booklist;

class IteratorTest extends TestCase {

    /** @test */
    function can_iterate_over_booklist()
    {
        $bookList = new Booklist();

        $bookList->addBook(new Book('Book A', 'Author A'));
        $bookList->addBook(new Book('Book B', 'Author B'));
        $bookList->addBook(new Book('Book C', 'Author C'));

        $books = [];

        foreach ($bookList as $book) {

            $books[] = $book->getAuthorAndTitle();
        }

        $this->assertEquals(
            [
                'Book A by Author A',
                'Book B by Author B',
                'Book C by Author C',
            ],
            $books
        );
    }

    /** @test */
    function can_iterate_over_booklist_after_removing_an_item()
    {
        $bookList = new Booklist();

        $bookToRemove = new Book('Book B', 'Author B');

        $bookList->addBook(new Book('Book A', 'Author A'));
        $bookList->addBook($bookToRemove);

        $this->assertCount(2, $bookList);

        $bookList->removeBook($bookToRemove);

        $books = [];

        foreach ($bookList as $book) {

            $books[] = $book->getAuthorAndTitle();
        }

        $this->assertEquals(
            [
                'Book A by Author A',
            ],
            $books
        );
    }

    /** @test */
    function can_add_book_to_booklist()
    {
        $bookToAdd = new Book('Book B', 'Author B');

        $bookList = new Booklist();
        $bookList->addBook($bookToAdd);

        $this->assertCount(1, $bookList);
    }
}