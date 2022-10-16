<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\AbstractFactory\Art;

use RobotDreams\Patterns\AbstractFactory\Furniture;
use RobotDreams\Patterns\AbstractFactory\FurnitureFactory;

class ArtFurnitureFactory implements FurnitureFactory
{

    public function createChair(): Furniture
    {
        return new ArtChair();
    }

    public function createSofa(): Furniture
    {
        return new ArtSofa();
    }

    public function createTable(): Furniture
    {
        return new ArtTable();
    }
}