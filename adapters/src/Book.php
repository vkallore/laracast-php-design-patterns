<?php
namespace Acme;

class Book implements BookInterface
{
    public function open()
    {
        echo 'Opened!';
    }

    public function turnPage()
    {
        echo 'Turning page!';
    }
}
