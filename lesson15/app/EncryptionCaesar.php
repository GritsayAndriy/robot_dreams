<?php

namespace Lesson15\App;

class EncryptionCaesar
{
    private int $key;

    public function __construct(int $key)
    {
        $this->key = $key;
    }

    public function encrypt(string $value): string
    {
        $splitValue = str_split($value);
        for ($i = 0; $i < abs($this->key); $i++) {
            $this->shift($splitValue);
        }
        return implode($splitValue);
    }

    private function shift(array &$value): void
    {
        if ($this->key < 0) {
            $item = array_shift($value);
            array_push($value, $item);
            return;
        }
        $item = array_pop($value);
        array_unshift($value, $item);
    }
}