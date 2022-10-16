<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\Visitor\Models;

use RobotDreams\Patterns\Visitor\Visitors\VisitorInterface;

class User implements ModelInterface
{
    public function __construct(
        private string $name
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function accept(VisitorInterface $visitor)
    {
        $visitor->visitUser($this);
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name
        ];
    }
}