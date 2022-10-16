<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\AbstractFactory;

use RobotDreams\Patterns\AbstractFactory\Art\ArtFurnitureFactory;
use RobotDreams\Patterns\AbstractFactory\Classic\ClassicFurnitureFactory;
use UnhandledMatchError;

class Factory
{
    const FURNITURE_ART = 'art';
    const FURNITURE_CLASSIC = 'classic';

    public static function getFurnitureFactory(string $furnitureFactoryName): ?FurnitureFactory
    {
        try {
            return match ($furnitureFactoryName) {
                self::FURNITURE_ART => new ArtFurnitureFactory(),
                self::FURNITURE_CLASSIC => new ClassicFurnitureFactory()
            };
        } catch (UnhandledMatchError $exception) {
            echo 'Not fount furniture factory';
        }
        return null;
    }
}