<?php
namespace DesignPattern\More\Repository\Domain;

class PostStatus
{
    public const STATUS_DRAFT_ID = 1;

    public const STATUS_PUBLISHED_ID = 2;

    public const STATUS_DRAFT = 'draft';

    public const STATUS_PUBLISHED = 'published';

    private static $validStates = [
        self::STATUS_DRAFT_ID     => self::STATUS_DRAFT,
        self::STATUS_PUBLISHED_ID => self::STATUS_PUBLISHED,
    ];

    private $id;

    private $name;

    public static function fromInt(int $statusId): self
    {
        self::ensureIsValidId($statusId);

        return new self($statusId, self::$validStates[$statusId]);
    }

    public static function fromString(string $status): self
    {
        self::ensureIsValidName($status);

        return new self(\array_search($status, self::$validStates), $status);
    }

    private function __construct(int $id, string $status)
    {
        $this->id     = $id;
        $this->status = $status;
    }

    public function toInt(): int
    {
        return $this->id;
    }

    public function toString(): string
    {
        return $this->name;
    }

    private static function ensureIsValidId(int $statusId): void
    {
        if (!\in_array($statusId, \array_keys(self::$validStates), true)) {
            throw new InvalidArgumentException();
        }
    }

    private static function ensureIsValidName(string $status): void
    {
        if (!\in_array($status, self::$validStates, true)) {
            throw new InvalidArgumentException();
        }
    }
}
