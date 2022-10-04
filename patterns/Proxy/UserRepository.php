<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\Proxy;

class UserRepository implements RepositoryInterface
{
    public function create(array $data = [])
    {
        echo 'User was created: ' . json_encode($data);
    }
}