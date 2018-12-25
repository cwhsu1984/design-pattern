<?php
namespace Test\Behavorial\TemplateMethod;

use DesignPattern\Behavorial\TemplateMethod\AscendingItem;
use DesignPattern\Behavorial\TemplateMethod\DescendingItem;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testAscendingItem(): void
    {
        $item   = new AscendingItem();
        $result = $item->process('1,20,11,33');
        $this->assertEquals([1, 11, 20, 33], $result);
    }

    public function testDescendingItem(): void
    {
        $item   = new DescendingItem();
        $result = $item->process('1,20,11,33');
        $this->assertEquals([33, 20, 11, 1], $result);
    }
}
