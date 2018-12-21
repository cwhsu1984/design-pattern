<?php
namespace Test\Structural\Adapter;

use DesignPattern\Structural\Proxy\ImageProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testImageProxyGetName(): void
    {
        $proxy = new ImageProxy('foo.img');
        $name  = $proxy->getName();
        $this->assertEquals('foo.img', $name);
    }

    public function testImageProxyDraw(): void
    {
        $proxy = new ImageProxy('foo.img');
        $draw  = $proxy->draw();
        $this->assertEquals('draw foo.img', $draw);
    }
}
