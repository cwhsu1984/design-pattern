<?php
namespace Test\Structural\Bridge;

use DesignPattern\Structural\Bridge\IconWindow;
use DesignPattern\Structural\Bridge\PMWindowImplementor;
use DesignPattern\Structural\Bridge\TransientWindow;
use DesignPattern\Structural\Bridge\XWindowImplementor;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testIconWindowDrawByXWindow(): void
    {
        $icon   = new IconWindow(new XWindowImplementor());
        $result = $icon->drawBorder();
        $this->assertContains('XWindow draw text', $result);
        $this->assertContains('XWindow draw line', $result);
    }

    public function testIconWindowDrawByPMWindow(): void
    {
        $icon   = new IconWindow(new PMWindowImplementor());
        $result = $icon->drawBorder();
        $this->assertContains('PMWindow draw text', $result);
        $this->assertContains('PMWindow draw line', $result);
    }

    public function testTransientWindowDrawByXWindow(): void
    {
        $icon   = new TransientWindow(new XWindowImplementor());
        $result = $icon->drawCloseBox();
        $this->assertContains('XWindow draw line', $result);
    }

    public function testTransientWindowDrawByPMWindow(): void
    {
        $icon   = new TransientWindow(new PMWindowImplementor());
        $result = $icon->drawCloseBox();
        $this->assertContains('PMWindow draw line', $result);
    }
}
