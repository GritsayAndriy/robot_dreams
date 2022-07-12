<?php

class Queue
{
    private array $queue = [];
    private int $firstIndex = 0;

    public function enqueue(mixed $item): self
    {
        $this->queue[] = $item;
        return $this;
    }

    public function dequeue(): mixed
    {
        if (empty($this->queue)) {
            return null;
        }
        $item = $this->queue[$this->firstIndex];
        unset($this->queue[$this->firstIndex++]);
        return $item;
    }

    public function peek(): array
    {
        return $this->queue;
    }
}