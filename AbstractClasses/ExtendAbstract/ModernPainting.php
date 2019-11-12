<?php

namespace AbstractClasses\ExtendAbstract;

use AbstractClasses\AbstractClass\Painting;

class ModernPainting extends Painting
{
    public function paintingStyle()
    {
        echo 'This is modern painting';
    }
}
