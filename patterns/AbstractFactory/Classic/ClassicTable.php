<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\AbstractFactory\Classic;

use RobotDreams\Patterns\AbstractFactory\Furniture;

class ClassicTable implements Furniture
{

    public function create()
    {
        echo 'Created classic table' . "\n";
    }
}