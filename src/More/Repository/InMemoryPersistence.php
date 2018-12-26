<?php
namespace DesignPattern\More\Repository;

class InMemoryPersistence implements PersistenceInterface
{
    private $data = [];

    private $lastId = 0;

    public function generateId(): int
    {
        $this->lastId++;

        return $this->lastId;
    }

    public function persist(array $data): void
    {
        $this->data[$this->lastId] = $data;
    }

    public function retrieve(int $id): array
    {
        if (!isset($this->data[$id])) {
            throw new \OutOfBoundsException();
        }

        return $this->data[$id];
    }

    public function delete(int $id): void
    {
        if (!isset($this->data[$id])) {
            throw new \OutOfBoundsException();
        }
        unset($this->data[$id]);
    }
}
