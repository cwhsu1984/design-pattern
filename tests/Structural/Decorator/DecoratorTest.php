<?php
namespace Test\Structural\Decorator;

use DesignPattern\Structural\Decorator\Md5Format;
use DesignPattern\Structural\Decorator\Text;
use DesignPattern\Structural\Decorator\UpperFormat;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecorateMd5Format(): void
    {
        $result = (new Md5Format(new text('foo')))->format();
        $this->assertequals('acbd18db4cc2f85cedef654fccc4a4d8', $result);
    }

    public function testDecorateUpperFormat(): void
    {
        $result = (new UpperFormat(new text('foo')))->format();
        $this->assertequals('FOO', $result);
    }

    public function testDecorateUpperAndMd5Format(): void
    {
        $result = (new Md5Format(new UpperFormat(new text('foo'))))->format();
        $this->assertequals('901890a8e9c8cf6d5a1a542b229febff', $result);
    }
}
