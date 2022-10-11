<?php

declare(strict_types=1);

$array = [10, 20, 22, 33, 9, 4, 2, 8,];

$firstMaxNumber = popMaxItem($array);
$secondMaxNumber = popMaxItem($array);
echo var_export($array);
echo 'Result: '. $firstMaxNumber * $secondMaxNumber . "\n";

function popMaxItem(array &$array): float
{
    $maxItem = 0;
    $indexMaxItem = 0;
    foreach ($array as $key => $item) {
        if ($item > $maxItem) {
            $maxItem = $item;
            $indexMaxItem = $key;
        }
    }
    array_splice($array, $indexMaxItem, 1);
    return $maxItem;
}