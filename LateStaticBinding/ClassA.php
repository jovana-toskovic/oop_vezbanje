<?php

namespace LateStaticBinding;

class ClassA
{
    public static function foo() 
    {
        echo static::who();
    }

    public static function who() 
    {
        return 'A';
    }
}
