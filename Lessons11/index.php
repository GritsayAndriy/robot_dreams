<?php
require_once __DIR__ . '/Stack.php';
require_once __DIR__ . '/Queue.php';

$startTime = microtime(true);
$stack = new Stack();
for ($i = 0; $i < 100000; $i++) {
    $stack->push('item ' . $i);
}
$stackInsertTime = microtime(true) - $startTime;
echo 'Time of insert to stack: ' . $stackInsertTime . "\n";

$startTime = microtime(true);
for ($i = 0; $i < 100000; $i++) {
    $stack->pop();
}
$stackPullTime = microtime(true) - $startTime;
echo 'Time of pop from stack: ' . $stackPullTime . "\n";

$queue = new Queue();
$startTime = microtime(true);
for ($i = 0; $i < 100000; $i++) {
    $queue->enqueue('item ' . $i);
}
$queueInsertTime = microtime(true) - $startTime;
echo 'Time of insert to queue: ' . $queueInsertTime . "\n";

$startTime = microtime(true);
for ($i = 0; $i < 100000; $i++) {
    $queue->dequeue();
}
$queuePullTime = microtime(true) - $startTime;
echo 'Time of dequeue from queue: ' . $queuePullTime . "\n";

echo "Summary: \n";
echo 'Faster insertion is ' . ($stackInsertTime > $queueInsertTime ? 'stack' : 'queue') . "\n";
echo 'Faster pulling is ' . ($stackPullTime > $queuePullTime ? 'stack' : 'queue') . "\n";