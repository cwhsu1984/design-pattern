<?php
namespace Tests\Creational\Builder;

use DesignPattern\Creational\Builder\Director;
use DesignPattern\Creational\Builder\TextBuilder;
use DesignPattern\Creational\Builder\JsonBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testTextBuilder(): void
    {
        $result = (new Director())->build(new TextBuilder());
        $this->assertEquals('title: hello message: world', $result);
    }

    public function testJsonBuilder(): void
    {
        $result = (new Director())->build(new JsonBuilder());
        $this->assertEquals('{"title":"hello","message":"world"}', $result);
    }
}
