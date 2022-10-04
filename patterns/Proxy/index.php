<?php

//echo __DIR__ . '/../../vendor/autoload.php';
//die();
use RobotDreams\Patterns\Proxy\UserProxyRepository;

require_once  __DIR__ . '/../../vendor/autoload.php';

$user = new UserProxyRepository();
$user->create(['name' => 'Andrii', 'email' => 'andriiban@gmail.com']);
$user->create(['name' => 'Andrii', 'email' => 'andrii@gmail.com']);