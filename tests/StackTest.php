<?php
/**
 * Created by PhpStorm.
 * User: khaliddabjan
 * Date: 2/15/18
 * Time: 11:26 AM
 */

namespace tests;

use PHPUnit\Framework\TestCase;
use src\Stacks\Stack;

class StackTest extends TestCase
{
    protected $stack;

    protected function setUp()
    {
        parent::setUp();
        $this->stack = new Stack();
    }

    public function testPush()
    {
        $this->assertEquals(0, $this->stack->count());
        $this->stack->push(1);
        $this->assertEquals(1, $this->stack->count());
    }

    public function testPop()
    {
        $this->stack->push(13);
        $this->stack->push(7);
        $this->assertEquals(7, $this->stack->pop());
        $this->assertEquals(13, $this->stack->pop());
    }

    public function testCount()
    {
        $this->assertEquals(0, $this->stack->count());
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);
        $this->assertEquals(3, $this->stack->count());
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->stack->isEmpty());
        $this->stack->push(1);
        $this->assertFalse($this->stack->isEmpty());
    }

    public function testPeek()
    {
        $this->stack->push(7);
        $this->stack->push(13);
        $this->assertEquals(2, $this->stack->count());
        $this->assertEquals(13, $this->stack->peek());
        $this->assertEquals(2, $this->stack->count());
    }
}
