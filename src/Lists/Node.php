<?php
/**
 * Created by PhpStorm.
 * User: khaliddabjan
 * Date: 2/20/18
 * Time: 2:39 PM
 */

namespace src\Lists;


class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}
