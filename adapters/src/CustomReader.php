<?php
namespace Acme;

class CustomReader implements CustomReaderInterface
{
    public function wakeUp()
    {
        echo 'CustomReader Waking Up!';
    }

    public function goNext()
    {
        echo 'CustomReader showing next screen!';
    }
}
