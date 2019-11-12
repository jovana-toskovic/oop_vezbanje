<?php

namespace LateStaticBinding;

use LateStaticBinding\ClassA;

class ClassB extends ClassA
{
    public static function test() 
    {
        ClassA::foo();
        parent::foo();
        self::foo();
    }
}
