<?php
namespace Test\Structural\Adapter;

use DesignPattern\Structural\Adapter\DashMessage;
use DesignPattern\Structural\Adapter\DashMessageAdapter;
use DesignPattern\Structural\Adapter\DotMessage;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testDotMessage(): void
    {
        $dot    = new DotMessage('hello world');
        $result = $dot->getResult();
        $this->assertEquals('hello.world', $result);
    }

    public function testDashMessage(): void
    {
        $dash   = new DashMessage('hello world');
        $result = $dash->show();
        $this->assertEquals('hello-world', $result);
    }

    public function testDotMessageAdapter(): void
    {
        $dash    = new DashMessage('hello world');
        $adapter = new DashMessageAdapter($dash);
        $result  = $adapter->getResult();
        $this->assertEquals('hello.world', $result);
    }
}
