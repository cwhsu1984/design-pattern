<?php
namespace Test\More\ServiceLocator;

use DesignPattern\More\ServiceLocator\LogService;
use DesignPattern\More\ServiceLocator\ServiceLocator;
use PHPUnit\Framework\TestCase;

class ServiceLocatorTest extends TestCase
{
    public function testLocatorHasService(): void
    {
        $locator = $this->createServiceLocator();
        $locator->addInstance(LogService::class, new LogService());
        $this->assertTrue($locator->has(LogService::class));
    }

    public function testLocatorHasNoService(): void
    {
        $locator = $this->createServiceLocator();
        $this->assertFalse($locator->has(LogService::class));
    }

    public function testLocatorGetSharedInstance(): void
    {
        $locator    = $this->createServiceLocator();
        $logService = new LogService();
        $locator->addInstance(LogService::class, $logService);
        $result = $locator->get(LogService::class);
        $this->assertSame($logService, $result);
    }

    public function testLocatorGetIndependentInstance(): void
    {
        $locator    = $this->createServiceLocator();
        $logService = new LogService();
        $locator->addInstance(LogService::class, $logService, false);
        $result = $locator->get(LogService::class);
        $this->assertNotSame($logService, $result);
    }

    public function testLocatorAddClass(): void
    {
        $locator = $this->createServiceLocator();
        $locator->addClass(LogService::class, [], false);
        $result = $locator->get(LogService::class);
        $this->assertInstanceOf(LogService::class, $result);
    }

    private function createServiceLocator(): ServiceLocator
    {
        return new ServiceLocator();
    }
}
