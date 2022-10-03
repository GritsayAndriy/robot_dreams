<?php

require_once __DIR__. '/BinaryTree.php';
require_once __DIR__. '/BinaryTreeNode.php';

$binaryTree = new BinaryTree();

$startTime = microtime(true);
$binaryTree->insert(12)
    ->insert(11)
    ->insert(13)
    ->insert(4)
    ->insert(6);

echo 'Time of insert to tree: ' . microtime(true) - $startTime . "\n";

$startTime = microtime(true);
$foundNode = $binaryTree->find(6);
echo 'Time of find from tree: ' . microtime(true) - $startTime . "\n";

$startTime = microtime(true);
$foundNode = $binaryTree->delete(4);
echo 'Time of delete from tree: ' . microtime(true) - $startTime . "\n";

var_dump($foundNode);