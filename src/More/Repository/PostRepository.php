<?php
namespace DesignPattern\More\Repository;

use DesignPattern\More\Repository\Domain\Post;
use DesignPattern\More\Repository\Domain\PostId;

class PostRepository
{
    private $persistence;

    public function __construct(PersistenceInterface $persistence)
    {
        $this->persistence = $persistence;
    }

    public function generateId(): PostId
    {
        return PostId::fromInt($this->persistence->generateId());
    }

    public function findById(PostId $id): Post
    {
        try {
            $data = $this->persistence->retrieve($id->toInt());
        } catch (\OutOfBoundsException $e) {
            throw new \OutOfBoundsException();
        }

        return Post::fromState($data);
    }

    public function save(Post $post): void
    {
        $this->persistence->persist([
            'id'       => $post->getId()->toInt(),
            'statusId' => $post->getStatus()->toInt(),
            'text'     => $post->getText(),
            'title'    => $post->getTitle(),
        ]);
    }
}
