<?php

namespace RobotDreams\Patterns\Visitor\Models;

use RobotDreams\Patterns\Visitor\VisitorInterface;

interface ModelInterface
{
    public function accept(VisitorInterface $visitor);
}