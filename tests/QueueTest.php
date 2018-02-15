<?php
/**
 * Created by PhpStorm.
 * User: khaliddabjan
 * Date: 2/15/18
 * Time: 11:37 AM
 */

namespace tests;

use PHPUnit\Framework\TestCase;
use src\Queues\Queue;

class QueueTest extends TestCase
{
    protected $queue;

    protected function setUp()
    {
        parent::setUp();
        $this->queue = new Queue();
    }

    public function testCount()
    {
        $this->assertEquals(0, $this->queue->count());
        $this->queue->enqueue(1);
        $this->assertEquals(1, $this->queue->count());
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->queue->isEmpty());
    }

    public function testEnqueue()
    {
        $this->assertEquals(0, $this->queue->count());
        $this->queue->enqueue(13);
        $this->queue->enqueue(7);
        $this->assertEquals(2, $this->queue->count());
    }

    public function testDequeue()
    {
        $this->queue->enqueue(13);
        $this->queue->enqueue(7);
        $this->queue->enqueue(1);
        $this->assertEquals(13, $this->queue->dequeue());
        $this->assertEquals(7, $this->queue->dequeue());
        $this->assertEquals(1, $this->queue->dequeue());

        $this->assertEquals(0, $this->queue->count());
    }
}
