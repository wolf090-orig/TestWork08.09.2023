<?php

namespace YourNamespace;

use DateTime;

class Entity
{
    public $ID;
    public $NAME;
    public $DATE_INSERT;

    public function __construct($name)
    {
        $this->NAME = $name;
        $this->DATE_INSERT = new DateTime();
    }
}
