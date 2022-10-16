<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\AbstractFactory\Classic;

use RobotDreams\Patterns\AbstractFactory\Furniture;
use RobotDreams\Patterns\AbstractFactory\FurnitureFactory;

class ClassicFurnitureFactory implements FurnitureFactory
{

    public function createChair(): Furniture
    {
        return new ClassicChair();
    }

    public function createSofa(): Furniture
    {
        return new ClassicSofa();
    }

    public function createTable(): Furniture
    {
        return new ClassicTable();
    }
}