<?php

namespace RobotDreams\Patterns\Visitor\Visitors;

use RobotDreams\Patterns\Visitor\Models\ModelInterface;

interface VisitorInterface
{
    public function visitUser(ModelInterface $model);
    public function visitOrders(ModelInterface $model);
}