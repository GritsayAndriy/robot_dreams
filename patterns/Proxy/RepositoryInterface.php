<?php

namespace RobotDreams\Patterns\Proxy;

interface RepositoryInterface
{
    public function create(array $data = []);
}