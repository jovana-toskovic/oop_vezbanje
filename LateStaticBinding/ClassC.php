<?php

namespace LateStaticBinding;

use LateStaticBinding\ClassB;

class ClassC extends ClassB
{
    public static function who() 
    {
        echo '<p>C</p>';
    }
}
