<?php

namespace Main\AbstractClasses\ExtendAbstract;

use Main\AbstractClasses\AbstractClass\Painting;

class ModernPainting extends Painting
{
    public function paintingStyle()
    {
        echo 'This is modern painting';
    }
}
