<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\Visitor\Visitors;

use RobotDreams\Patterns\Visitor\Models\ModelInterface;

class JsonExportVisitor implements VisitorInterface
{
    private $pathToStorageFileOrders = __DIR__. '/../storage/orders.json';
    private $pathToStorageFileUser = __DIR__. '/../storage/users.json';

    public function visitUser(ModelInterface $model)
    {
        $content = json_encode($model->toArray());
        file_put_contents($this->pathToStorageFileUser, $content, FILE_APPEND);
    }

    public function visitOrders(ModelInterface $model)
    {
        $content = json_encode($model->toArray());
        file_put_contents($this->pathToStorageFileOrders, $content, FILE_APPEND);
    }
}