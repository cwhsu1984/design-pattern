<?php
namespace Test\Behavorial\NullObject;

use DesignPattern\Behavorial\NullObject\NullLogger;
use DesignPattern\Behavorial\NullObject\PrintLogger;
use DesignPattern\Behavorial\NullObject\Service;
use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testNullLogger(): void
    {
        $service = new Service(new NullLogger());
        $service->work();
        $this->expectOutputString('');
    }

    public function testPrintLogger(): void
    {
        $service = new Service(new PrintLogger());
        $service->work();
        $this->expectOutputString('DesignPattern\Behavorial\NullObject\Service::work');
    }
}
