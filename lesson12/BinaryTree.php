<?php

declare(strict_types=1);

class BinaryTree
{
    protected ?BinaryTreeNode $rootNode = null;

    public function insert(int $value): self
    {
        $node = new BinaryTreeNode($value);
        $this->insertNode($node, $this->rootNode);
        return $this;
    }

    protected function insertNode(BinaryTreeNode $node, ?BinaryTreeNode &$subNode)
    {
        if ($subNode === null) {
            $subNode = $node;
        } else {
            if ($node->value < $subNode->value) {
                $this->insertNode($node, $subNode->leftNode);
            } elseif ($node->value > $subNode->value) {
                $this->insertNode($node, $subNode->rightNode);
            }
        }
        return $this;
    }

    public function find(int $value): ?BinaryTreeNode
    {
        return $this->findNode($value, $this->rootNode);
    }

    protected function &findNode(int $value, ?BinaryTreeNode &$subNode): ?BinaryTreeNode
    {
        if ($subNode->value > $value) {
            if ($subNode->leftNode !== null) {
                return $this->findNode($value, $subNode->leftNode);
            }else{
                return $subNode;
            }
        } elseif ($subNode->value < $value) {
            if ($subNode->rightNode !== null) {
                return $this->findNode($value, $subNode->rightNode);
            }else{
                return $subNode;
            }
        } else {
            return $subNode;
        }
    }

    public function delete(int $value)
    {
        if ($this->rootNode === null) {
            echo 'Tree is empty!';
            return $this;
        }

        $node = &$this->findNode($value, $this->rootNode);
        if ($node) {
            $this->deleteNode($node);
        }
        return $this;
    }

    protected function deleteNode(BinaryTreeNode &$node)
    {
        if ($node->leftNode === null && $node->rightNode === null) {
            $node = null;
        } elseif ($node->leftNode === null) {
            $node = $node->rightNode;
        } elseif ($node->rightNode === null) {
            $node = $node->leftNode;
        } else {
            if ($node->rightNode->leftNode === null) {
                $node->rightNode->left = $node->leftNode;
                $node = $node->rightNode;
            } else {
                $node->value = $node->rightNode->leftNode->value;
                $this->deleteNode($node->rightNode->leftNode);
            }
        }
    }
}