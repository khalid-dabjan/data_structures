<?php
/**
 * Created by PhpStorm.
 * User: khaliddabjan
 * Date: 2/15/18
 * Time: 5:34 PM
 */

namespace tests;

use PHPUnit\Framework\TestCase;
use src\Stacks\TraversableStack;

class TraversableStackTest extends TestCase
{
    protected $traversableStack;

    protected function setUp()
    {
        parent::setUp();
        $this->traversableStack = new TraversableStack();
    }

    public function testTraversable()
    {
        $this->traversableStack->push(3);
        $this->traversableStack->push(2);
        $this->traversableStack->push(1);
        $this->traversableStack->push(0);
        foreach ($this->traversableStack as $index => $item) {
            $this->assertEquals($item, $index);
        }
    }
}
