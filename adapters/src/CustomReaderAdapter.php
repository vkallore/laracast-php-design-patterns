<?php
namespace Acme;

use Acme\CustomReader;

class CustomReaderAdapter implements BookInterface
{

    private $customReader;

    public function __construct(CustomReader $customReader)
    {
        $this->customReader = $customReader;
    }

    public function open()
    {
        $this->customReader->wakeUp();
    }

    public function turnPage()
    {
        $this->customReader->goNext();
    }
}
