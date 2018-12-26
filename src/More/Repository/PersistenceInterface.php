<?php
namespace DesignPattern\More\Repository;

interface PersistenceInterface
{
    public function generateId(): int;

    public function persist(array $data);

    public function retrieve(int $id): array;

    public function delete(int $id);
}
