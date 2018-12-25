<?php
namespace DesignPattern\Structural\DataMapper;

class Storage
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function findById(int $id): ?array
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }

    public function persist(User $user): void
    {
        $this->data[$user->getId()] = [
            'id'        => $user->getId(),
            'firstname' => $user->getFirstname(),
            'lastname'  => $user->getLastname(),
        ];
    }
}
