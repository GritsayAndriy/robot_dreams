<?php

class Stack
{
    private array $stack = [];
    private int $length = 0;

    public function pop(): mixed
    {
        if ($this->length <= 0) {
            return null;
        }
        $item = $this->stack[--$this->length];
        unset($this->stack[$this->length]);
        return $item;

    }

    public function push(mixed $item): self
    {
        $this->stack[] = $item;
        $this->length++;
        return $this;
    }

    public function peek(): array
    {
        return $this->stack;
    }
}