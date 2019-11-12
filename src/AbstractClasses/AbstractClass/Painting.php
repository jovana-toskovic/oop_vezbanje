<?php

namespace Main\AbstractClasses\AbstractClass;

abstract class Painting
{
    abstract protected function paintingStyle();

    public function __construct() 
    {
        echo '<p>From abstract class Painting constructor: I cannot be constructed</p>';
    }
}
