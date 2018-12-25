<?php
namespace Test\Behavorial\Iterator;

use DesignPattern\Behavorial\Iterator\IteratorInterface;
use DesignPattern\Behavorial\Iterator\MyList;
use DesignPattern\Behavorial\Iterator\MyListTraverser;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testMyListAdd(): void
    {
        $list = new MyList();
        $list->add(1);
        $result = $this->count();
        $this->assertEquals(1, $result);
    }

    public function testMyListRemove(): void
    {
        $list = new MyList();
        $list->add(1);
        $list->add(2);
        $list->remove(1);
        $result = $list->count();
        $this->assertEquals(1, $result);
    }

    public function testMyListGetIterator(): void
    {
        $list     = new MyList();
        $result   = $list->getIterator();
        $this->assertInstanceOf(IteratorInterface::class, $result);
    }

    public function testMyListIteratorFirst(): void
    {
        $list = new MyList();
        $list->add(1);
        $iterator = $list->getIterator();
        $iterator->first();
        $result = $iterator->current();
        $this->assertEquals(1, $result);
    }

    public function testMyListIteratorNext(): void
    {
        $list = new MyList();
        $list->add(1);
        $list->add(2);
        $iterator = $list->getIterator();
        $iterator->next();
        $result = $iterator->current();
        $this->assertEquals(2, $result);
    }

    public function testMyListIteratorHasNext(): void
    {
        $list     = new MyList();
        $iterator = $list->getIterator();
        $result   = $iterator->hasNext();
        $this->assertEquals(false, $result);
    }

    public function testMyListIteratorCurrent(): void
    {
        $list = new MyList();
        $list->add(1);
        $iterator = $list->getIterator();
        $result   = $iterator->current();
        $this->assertEquals(1, $result);
    }

    public function testMyListIteratorPrevious(): void
    {
        $list = new MyList();
        $list->add(1);
        $list->add(2);
        $iterator = $list->getIterator();
        $iterator->next();
        $iterator->previous();
        $result = $iterator->current();
        $this->assertEquals(1, $result);
    }

    public function testMyListTraverser(): void
    {
        $list = new MyList();
        $list->add(1);
        $list->add(2);
        $listTraverser = new MyListTraverser($list);
        $result        = $listTraverser->traverse();
        $this->assertEquals('1,2', $result);
    }

    public function testMyListRemoveEmptyListThrowUnderflowException()
    {
        $this->expectException(\UnderflowException::class);
        $list = new MyList();
        $list->remove(0);
    }

    public function testMyListRemoveEmptyListThrowOutOfBoundsException()
    {
        $this->expectException(\OutOfBoundsException::class);
        $list = new MyList();
        $list->add(1);
        $list->remove(3);
    }
}
