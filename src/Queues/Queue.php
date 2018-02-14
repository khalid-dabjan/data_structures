<?php

namespace src\Queues;


class Queue
{
    protected $queue = [];

    /**
     * Returns the number of the items currently in the queue.
     * @return int
     */
    public function count()
    {
        return count($this->queue);
    }

    /**
     * Checks if the queue is empty or not.
     * @return bool
     */
    public function isEmpty()
    {
        return $this->count() === 0;
    }

    /**
     * Adds a new item to the end of the queue.
     * @param $item
     */
    public function enqueue($item)
    {
        $this->queue[] = $item;
    }

    /**
     * Removes and returns the first item in the queue.
     * @return mixed
     */
    public function dequeue()
    {
        return array_shift($this->queue);
    }
}