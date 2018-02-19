<?php
/**
 * Created by PhpStorm.
 * User: khaliddabjan
 * Date: 2/18/18
 * Time: 12:57 PM
 */

namespace tests;

use PHPUnit\Framework\TestCase;
use src\Trees\BinarySearchTree;

class BinarySearchTreeTest extends TestCase
{

    public $tree;

    protected function setUp()
    {
        parent::setUp();
        $this->tree = new BinarySearchTree();
        $items = [10, 5, 15, 30, 2, 3, 7, 13];
        foreach ($items as $item) {
            $this->tree->insert($item);
        }
    }

    public function testInOrderTraverse()
    {
        $this->assertEquals([
            2, 3, 5, 7, 10, 13, 15, 30
        ], $this->tree->inOrderTraverse());
    }

    public function testPostOrderTraverse()
    {
        $this->assertEquals([
            3, 2, 7, 5, 13, 30, 15, 10
        ], $this->tree->PostOrderTraverse());
    }

    public function testPreOrderTraverse()
    {
        $this->assertEquals([
            10, 5, 2, 3, 7, 15, 13, 30
        ], $this->tree->PreOrderTraverse());
    }
}
