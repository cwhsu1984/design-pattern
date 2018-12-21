<?php
namespace Test\Structural\Composite;

use DesignPattern\Structural\Composite\Line;
use DesignPattern\Structural\Composite\Picture;
use DesignPattern\Structural\Composite\Text;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testComposite(): void
    {
        $picture = new Picture();
        $picture->add(new Line());
        $picture->add(new Text());
        $result = $picture->draw();
        $this->assertContains('picture', $result);
        $this->assertContains('line', $result);
        $this->assertContains('text', $result);
    }
}
