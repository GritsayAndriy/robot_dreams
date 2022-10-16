<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\Visitor\Models;

use RobotDreams\Patterns\Visitor\Visitors\VisitorInterface;

class Order implements ModelInterface
{
    public function __construct(
        private float $amount,
        private User $user
    ) {
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function accept(VisitorInterface $visitor)
    {
        $visitor->visitOrders($this);
    }

    public function toArray(): array
    {
        return [
            'username' => $this->user->getName(),
            'amount' => $this->amount
        ];
    }
}