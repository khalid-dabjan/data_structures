<?php
/**
 * Created by PhpStorm.
 * User: khaliddabjan
 * Date: 2/15/18
 * Time: 11:18 AM
 */

namespace src\Stacks;


class Stack
{
    protected $items = [];

    /**
     * Push new item into the stack.
     * @param $item
     */
    public function push($item)
    {
        $this->items[] = $item;
    }

    /**
     * Get the last item inserted into the stack.
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->items);
    }

    /**
     * Returns the current count of items in the stack.
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * Checks if the stack is currently empty.
     * @return bool
     */
    public function isEmpty()
    {
        return $this->count() === 0;
    }

    /**
     * Returns the last item inserted into the stack without popping it.
     * @return mixed
     */
    public function peek()
    {
        return $this->items[$this->count() - 1];
    }
}