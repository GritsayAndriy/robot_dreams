<?php

declare(strict_types=1);

class BubbleSort
{
    public function sort(array $data)
    {
        for ($j = 0; $j < count($data); $j++) {
            for ($i = 0; $i < count($data) - 1; $i++) {
                if ($data[$i] > $data[$i + 1]) {
                    $biggestItem = $data[$i];
                    $data[$i] = $data[$i + 1];
                    $data[$i + 1] = $biggestItem;
                }
            }
        }
        return $data;
    }
}