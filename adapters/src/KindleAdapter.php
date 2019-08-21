<?php
namespace Acme;

use Acme\Kindle;

class KindleAdapter implements BookInterface
{

    private $kindle;

    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
        $this->kindle->switchOn();
    }

    public function turnPage()
    {
        $this->kindle->tapNext();
    }
}
