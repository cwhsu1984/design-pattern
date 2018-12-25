<?php
namespace Tests\Creational\Pool;

use DesignPattern\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testWorkerNegativeValue(): void
    {
        $pool   = new WorkerPool();
        $worker = $pool->get();
        $result = $worker->negative(-10);
        $this->assertEquals(10, $result);
    }

    public function testWorkerPoolGetDifferentInstance(): void
    {
        $pool    = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();
        $this->assertNotSame($worker1, $worker2);
    }

    public function testWorkerWillBeReuse(): void
    {
        $pool    = new WorkerPool();
        $worker1 = $pool->get();
        $pool->remove($worker1);
        $worker2 = $pool->get();
        $this->assertSame($worker1, $worker2);
    }

    public function testWorkerPoolCount(): void
    {
        $pool   = new WorkerPool();
        $worker = $pool->get();
        $worker = $pool->get();
        $result = $pool->count();
        $this->assertEquals(2, $result);
    }
}
