<?php
/**
 * Created by PhpStorm.
 * User: khaliddabjan
 * Date: 2/20/18
 * Time: 3:02 PM
 */

namespace tests;

use PHPUnit\Framework\TestCase;
use src\Lists\LinkedList;

class LinkedListTest extends TestCase
{
    public $linkedList;

    protected function setUp()
    {
        parent::setUp();
        $this->linkedList = new LinkedList();
    }

    public function testAppend()
    {
        $this->linkedList->append(1);
        $this->linkedList->append(2);
        $this->linkedList->append(3);

        self::assertEquals([1, 2, 3], $this->linkedList->asArray());
    }

    public function testPrepend()
    {
        $this->linkedList->prepend(1);
        $this->linkedList->prepend(2);
        $this->linkedList->prepend(3);

        self::assertEquals([3, 2, 1], $this->linkedList->asArray());
    }

    public function testDeleteHead()
    {
        $this->linkedList->append(1);
        $this->linkedList->append(2);
        $this->linkedList->append(3);

        $this->linkedList->deleteHead();

        self::assertEquals([2, 3], $this->linkedList->asArray());
    }

    public function testDeleteTail()
    {
        $this->linkedList->append(1);
        $this->linkedList->append(2);
        $this->linkedList->append(3);

        $this->linkedList->deleteTail();

        self::assertEquals([1, 2], $this->linkedList->asArray());
    }

    public function testDeleteByValue()
    {
        $this->linkedList->append(1);
        $this->linkedList->append(2);
        $this->linkedList->append(3);

        $this->linkedList->deleteByValue(2);

        self::assertEquals([1, 3], $this->linkedList->asArray());

        $this->linkedList->deleteByValue(1);

        self::assertEquals([3], $this->linkedList->asArray());

        $this->linkedList->deleteByValue(3);

        self::assertEquals([], $this->linkedList->asArray());
    }
}
