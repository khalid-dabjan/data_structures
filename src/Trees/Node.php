<?php
/**
 * Created by PhpStorm.
 * User: khaliddabjan
 * Date: 2/17/18
 * Time: 1:07 PM
 */

namespace src\Trees;


class Node
{
    public $data;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}