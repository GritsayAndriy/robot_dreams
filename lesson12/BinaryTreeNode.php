<?php

declare(strict_types=1);

class BinaryTreeNode
{
    public int $value;
    public ?self $leftNode = null;
    public ?self $rightNode = null;


    public function __construct(int $value)
    {
        $this->value = $value;
    }
}