<?php
namespace Test\Structural\FluentInterface;

use DesignPattern\Structural\FluentInterface\User;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    public function testUser(): void
    {
        $user =  (new User())->setName('foo')
            ->setEmail('foo@bar.com')
            ->setAge(18);
        $this->assertEquals('foo', $user->getName());
        $this->assertEquals('foo@bar.com', $user->getEmail());
        $this->assertEquals(18, $user->getAge());
    }
}
