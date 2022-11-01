<?php

require_once __DIR__ . '/BubbleSort.php';
require_once __DIR__ . '/QuickSort.php';

$longArray = [10, 5, 25, 15, 40, 33, 24, 100, 59, 32, 123, 3213, 787, 12, 32, 422, 99, 77, 222, 85];
$shortArray = [10, 5, 25, 15, 40, 33, 24, 100, 59, 32];

// Sort long array
$startTime = microtime(true);

var_dump((new BubbleSort)->sort($longArray));

$stackInsertTime = microtime(true) - $startTime;
echo 'Time of bubble sort with long array : ' . $stackInsertTime . "\n";

$startTime = microtime(true);

var_dump((new QuickSort)->sort($longArray));

$stackInsertTime = microtime(true) - $startTime;
echo 'Time of quick sort with long array: ' . $stackInsertTime . "\n";

// Sort short array
$startTime = microtime(true);

var_dump((new BubbleSort)->sort($shortArray));

$stackInsertTime = microtime(true) - $startTime;
echo 'Time of bubble sort with short array : ' . $stackInsertTime . "\n";

$startTime = microtime(true);

var_dump((new QuickSort)->sort($shortArray));

$stackInsertTime = microtime(true) - $startTime;
echo 'Time of quick sort with short array: ' . $stackInsertTime . "\n";
