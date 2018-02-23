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

    private function isTail($node)
    {
        return $node->next === null;
    }
}
