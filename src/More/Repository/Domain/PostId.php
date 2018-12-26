<?php
namespace DesignPattern\More\Repository\Domain;

class PostId
{
    private $id;

    public static function fromInt(int $id): self
    {
        self::ensureIsValid($id);

        return new self($id);
    }

    private function __construct(int $id)
    {
        $this->id = $id;
    }

    public function toInt(): int
    {
        return $this->id;
    }

    private static function ensureIsValid(int $id): void
    {
        if ($id <= 0) {
            throw new \InvalidArgumentException();
        }
    }
}
