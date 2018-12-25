<?php
namespace DesignPattern\Structural\DataMapper;

class UserMapper
{
    private $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function findById(int $id): ?User
    {
        $row = $this->storage->findById($id);

        if ($row === null) {
            return null;
        }

        return $this->mapUser($row);
    }

    public function insert(User $user): void
    {
        $this->storage->persist($user);
    }

    public function update(User $user): void
    {
        $this->storage->persist($user);
    }

    private function mapUser(array $row): User
    {
        return new User($row['id'], $row['firstname'], $row['lastname']);
    }
}
