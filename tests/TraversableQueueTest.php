<?php
/**
 * Created by PhpStorm.
 * User: khaliddabjan
 * Date: 2/15/18
 * Time: 10:08 AM
 */

namespace tests;

use PHPUnit\Framework\TestCase;
use src\Queues\TraversableQueue;

class TraversableQueueTest extends TestCase
{
    protected $traversableQueue;

    protected function setUp()
    {
        parent::setUp();
        $this->traversableQueue = new TraversableQueue();
    }


    public function testTraversable()
    {
        $this->traversableQueue->enqueue(0);
        $this->traversableQueue->enqueue(1);
        $this->traversableQueue->enqueue(2);
        $this->traversableQueue->enqueue(3);
        foreach ($this->traversableQueue as $index => $item) {
            $this->assertEquals($item, $index);
        }
    }
}
