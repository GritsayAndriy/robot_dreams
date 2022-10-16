<?php

use RobotDreams\Patterns\AbstractFactory\Factory;

require_once __DIR__ . '/../../vendor/autoload.php';

$factory = Factory::getFurnitureFactory(Factory::FURNITURE_CLASSIC);

$factory->createChair()->create();
$factory->createTable()->create();
$factory->createSofa()->create();

$factory = Factory::getFurnitureFactory(Factory::FURNITURE_ART);

$factory->createChair()->create();
$factory->createTable()->create();
$factory->createSofa()->create();