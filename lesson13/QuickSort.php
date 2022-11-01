<?php

declare(strict_types=1);

class QuickSort
{
    public function sort(array $data)
    {
        if(count($data) <= 1)
            return $data;

        $leftData = [];
        $rightData = [];

        $firstItem = $data[0];
        for ($i = 1; $i < count($data); $i++) {
            if ($firstItem > $data[$i]) {
                $leftData[] = $data[$i];
            } else {
                $rightData[] = $data[$i];
            }
        }

        $leftData = $this->sort($leftData);
        $rightData = $this->sort($rightData);

        return array_merge($leftData, [$firstItem], $rightData);
    }
}