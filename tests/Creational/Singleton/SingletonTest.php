<?php
namespace Tests\Creational\Singleton;

use DesignPattern\Creational\Singleton\DiskSingleton;
use DesignPattern\Creational\Singleton\Singleton;
use DesignPattern\Creational\Singleton\WifiSingleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingleton(): void
    {
        $one   = Singleton::getInstance();
        $other = Singleton::getInstance();
        $this->assertSame($one, $other);
    }

    public function testWifiSingletonForRegistrySingleton(): void
    {
        $disk1 = WifiSingleton::getInstance();
        $disk2 = WifiSingleton::getInstance();
        $this->assertSame($disk1, $disk2);
    }

    public function testDiskSingletonForRegistrySingleton(): void
    {
        $wifi1 = DiskSingleton::getInstance();
        $wifi2 = DiskSingleton::getInstance();
        $this->assertSame($wifi1, $wifi2);
    }

    public function testWifiSingletonAndDiskSingletonAreDifferent(): void
    {
        $disk = WifiSingleton::getInstance();
        $wifi = DiskSingleton::getInstance();
        $this->assertNotSame($disk, $wifi);
    }
}
