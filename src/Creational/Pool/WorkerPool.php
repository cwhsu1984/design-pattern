<?php
namespace DesignPattern\Creational\Pool;

class WorkerPool implements \Countable
{
    private $busyWorker = [];

    private $freeWorker = [];

    public function get(): Worker
    {
        if (\count($this->freeWorker) === 0) {
            $worker = new Worker();
        } else {
            $worker = \array_pop($this->freeWorker);
        }

        $this->busyWorker[$this->hash($worker)] = $worker;

        return $worker;
    }

    public function remove(Worker $worker): void
    {
        $hash = $this->hash($worker);
        unset($this->busyWorker[$hash]);
        $this->freeWorker[$hash] = $worker;
    }

    public function count(): int
    {
        return \count($this->busyWorker) + \count($this->freeWorker);
    }

    private function hash(Worker $worker): string
    {
        return \spl_object_hash($worker);
    }
}
