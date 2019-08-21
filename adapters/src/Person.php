<?php

use Acme\BookInterface;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        echo "\n";
        $book->turnPage();
    }
}