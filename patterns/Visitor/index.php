<?php

use RobotDreams\Patterns\Visitor\Models\Order;
use RobotDreams\Patterns\Visitor\Models\User;
use RobotDreams\Patterns\Visitor\Visitors\JsonExportVisitor;

require_once __DIR__ . '/../../vendor/autoload.php';

$visitor = new JsonExportVisitor();

$orders[] = new Order(12.5, new User('pety'));
$orders[] = new Order(8.25, new User('vasya'));

foreach ($orders as $order) {
    $order->accept($visitor);
    $order->getUser()->accept($visitor);
}