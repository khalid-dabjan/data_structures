<?php
/**
 * Created by PhpStorm.
 * User: khaliddabjan
 * Date: 2/14/18
 * Time: 1:50 PM
 */

namespace tests;


use PHPUnit\Framework\TestCase;
use src\Queues\Queue;


class QueueTest extends TestCase
{
    protected $queue;

    protected function setUp()
    {
        $this->queue = new Queue();
        parent::setUp();
    }

    /** @test */
    public function it_initialize_to_an_empty_queue()
    {
        $this->assertTrue($this->queue->isEmpty());
    }

    /** @test */
    public function it_can_return_the_count_of_the_items_in_the_queue()
    {
        $this->assertSame(0, $this->queue->count());
        $this->queue->enqueue(13);
        $this->assertEquals(1, $this->queue->count());
    }

    /** @test */
    public function it_can_enqueue_items()
    {
        $this->queue->enqueue(13);
        $this->assertEquals(1, $this->queue->count());
    }

    /** @test */
    public function it_can_dequeue_items()
    {
        $this->queue->enqueue(13);
        $this->queue->enqueue(7);
        $this->assertEquals(2, $this->queue->count());
        $this->queue->dequeue();
        $this->assertEquals(1, $this->queue->count());
    }

    /** @test */
    public function it_returns_null_when_dequeue_an_empty_queue()
    {
        $this->assertEquals(null, $this->queue->dequeue());
    }

    /** @test */
    public function it_is_a_fifo_structure()
    {
        $this->queue->enqueue(1);
        $this->queue->enqueue(2);
        $this->queue->enqueue(3);
        $this->assertEquals(1, $this->queue->dequeue());
        $this->assertEquals(2, $this->queue->dequeue());
        $this->assertEquals(3, $this->queue->dequeue());
    }

}
