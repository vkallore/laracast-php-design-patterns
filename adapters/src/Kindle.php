<?php
namespace Acme;

class Kindle implements eReaderInterface
{
    public function switchOn()
    {
        echo 'Kindle Switched On!';
    }

    public function tapNext()
    {
        echo 'Kindle Moved to next screen!';
    }
}
