<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\AbstractFactory\Classic;

use RobotDreams\Patterns\AbstractFactory\Furniture;

class ClassicChair implements Furniture
{
    public function create()
    {
        echo 'Created classic chair' . "\n";
    }
}