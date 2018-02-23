<?php

namespace src\Lists;


class LinkedList
{
    public $head;
    public $count;

    public function __construct()
    {
        $this->head = null;
        $this->count = 0;
    }

    public function asArray()
    {
        $asArray = [];
        $current = $this->head;
        while ($current !== null) {
            $asArray[] = $current->data;
            $current = $current->next;
        }
        return $asArray;
    }

    public function append($data)
    {
        if ($this->head === null) {
            $this->head = new Node($data);
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = new Node($data);
        }
        $this->count++;
    }

    public function prepend($data)
    {
        if ($this->head === null) {
            $this->head = new Node($data);
        } else {
            $oldHead = $this->head;
            $this->head = new Node($data);
            $this->head->next = $oldHead;
        }
    }

    public function deleteHead()
    {
        if ($this->head === null) {
            return;
        }
        $this->head = $this->head->next;
    }

    public function deleteTail()
    {
        if ($this->head === null) {
            return;
        }
        $current = $this->head;
        $next = $this->head->next;
        while (!$this->isTail($next)) {
            $current = $next;
            $next = $current->next;
        }
        $current->next = null;
    }

    public function deleteByValue($value)
    {
        if ($this->head === null) {
            return;
        }
        if ($this->head->data === $value) {
            $this->deleteHead();
            return;
        }
        $current = $this->head;
        $next = $current->next;
        while ($current->next !== null && $current->next->data !== $value) {
            $current = $current->next;
            $next = $current->next;
        }
        $current->next = $next === null ? null : $next->next;
    }

    private function isTail($node)
    {
        return $node->next === null;
    }
}
