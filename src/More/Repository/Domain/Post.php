<?php
namespace DesignPattern\More\Repository\Domain;

class Post
{
    private $id;

    private $status;

    private $title;

    private $text;

    public static function draft(PostId $id, string $title, string $text): self
    {
        return new self(
            $id,
            PostStatus::fromString(PostStatus::STATUS_DRAFT),
            $title,
            $text
        );
    }

    public static function fromState(array $state): self
    {
        return new self(
            PostId::fromInt($state['id']),
            PostStatus::fromInt($state['statusId']),
            $state['title'],
            $state['text']
        );
    }

    private function __construct(PostId $id, PostStatus $status, string $title, string $text)
    {
        $this->id     = $id;
        $this->status = $status;
        $this->title  = $title;
        $this->text   = $text;
    }

    public function getId(): PostId
    {
        return $this->id;
    }

    public function getStatus(): PostStatus
    {
        return $this->status;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
