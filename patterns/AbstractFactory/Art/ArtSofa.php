<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\AbstractFactory\Art;

use RobotDreams\Patterns\AbstractFactory\Furniture;

class ArtSofa implements Furniture
{

    public function create()
    {
        echo 'Created art sofa' . "\n";
    }
}