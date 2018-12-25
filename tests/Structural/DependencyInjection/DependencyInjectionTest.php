<?php
namespace Test\Structural\DependencyInjection;

use DesignPattern\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPattern\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDatabaseConnectionWithDatabaseConfiguration(): void
    {
        $configuration = new DatabaseConfiguration('10.10.10.10', '1234', 'root', '123456');
        $connection    = new DatabaseConnection($configuration);
        $result        = $connection->getDsn();
        $this->assertEquals('root:123456@10.10.10.10:1234', $result);
    }
}
