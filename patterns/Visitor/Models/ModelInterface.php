<?php

namespace RobotDreams\Patterns\Visitor\Models;

use RobotDreams\Patterns\Visitor\Visitors\VisitorInterface;

interface ModelInterface
{
    public function toArray(): array;

    public function accept(VisitorInterface $visitor);
}