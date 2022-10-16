<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\AbstractFactory;

interface FurnitureFactory
{
    public function createChair(): Furniture;

    public function createSofa(): Furniture;

    public function createTable(): Furniture;
}