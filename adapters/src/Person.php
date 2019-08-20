<?php

use Acme\Book;

class Person
{
    public function read($book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person)->read(new Book);