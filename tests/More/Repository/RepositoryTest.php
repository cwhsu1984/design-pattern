<?php
namespace Test\More\Repository;

use DesignPattern\More\Repository\Domain\Post;
use DesignPattern\More\Repository\Domain\PostId;
use DesignPattern\More\Repository\InMemoryPersistence;
use DesignPattern\More\Repository\PostRepository;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    public function testCanGenerateId(): void
    {
        $repository = $this->createRepository();
        $result     = $repository->generateId()->toInt();
        $this->assertEquals(1, $result);
    }

    public function testFindByIdNotFoundThrowException(): void
    {
        $this->expectException(\OutOfBoundsException::class);
        $repository = $this->createRepository();
        $repository->findById(PostId::fromInt(10));
    }

    public function testPersistDraftPost(): void
    {
        $repository = $this->createRepository();
        $postId     = $repository->generateId();
        $post       = Post::draft($postId, 'hello', 'world');
        $repository->save($post);
        $result = $repository->findById($postId);
        $this->assertEquals($postId, $result->getId());
    }

    private function createRepository(): PostRepository
    {
        return new PostRepository(new InMemoryPersistence());
    }
}
