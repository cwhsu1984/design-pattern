<?php
namespace Test\Structural\DataMapper;

use DesignPattern\Structural\DataMapper\Storage;
use DesignPattern\Structural\DataMapper\User;
use DesignPattern\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testUserMapperInsert(): void
    {
        $storage = new Storage([]);
        $mapper  = new UserMapper($storage);
        $user    = new User(1, 'Martin', 'Fowler');
        $mapper->insert($user);
        $result = $mapper->findById(1);
        $this->assertEquals($user, $result);
    }

    public function testUserMapperFindById(): void
    {
        $storage = $this->createStorageWithUser();
        $mapper  = new UserMapper($storage);
        $result  = $mapper->findById(1);
        $this->assertInstanceOf(User::class, $result);
        $this->assertEquals(1, $result->getId());
        $this->assertEquals('Martin', $result->getFirstname());
        $this->assertEquals('Fowler', $result->getLastname());
    }

    public function testUserMapperUpdate(): void
    {
        $storage = $this->createStorageWithUser();
        $mapper  = new UserMapper($storage);
        $user    = $mapper->findById(1);
        $user->setFirstname('David');
        $user->setLastname('Rice');
        $mapper->update($user);
        $result = $mapper->findById(1);
        $this->assertInstanceOf(User::class, $result);
        $this->assertEquals($user, $result);
    }

    private function createStorageWithUser(): Storage
    {
        return new Storage([1 => ['id' => 1, 'firstname' => 'Martin', 'lastname' => 'Fowler']]);
    }
}
