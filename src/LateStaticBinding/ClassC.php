<?php

namespace Main\LateStaticBinding;

use Main\LateStaticBinding\ClassB;

class ClassC extends ClassB
{
    public static function who() 
    {
        echo '<p>C</p>';
    }
}
