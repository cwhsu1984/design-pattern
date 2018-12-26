<?php
namespace Test\Structural\Registry;

use DesignPattern\Structural\Registry\AbstractRegistry;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    /**
     * @depends testRegistryGetNotExistedValuesThrowInvalidArgumentException
     *
     * If this test runs first, testRegistryGetNotExistedValuesThrowInvalidArgumentException will fail
     * because it can find LOGGER in the static values.
     */
    public function testRegistrySetAndGet(): void
    {
        $logger = new \stdClass();
        AbstractRegistry::set(AbstractRegistry::LOGGER, $logger);
        $result = AbstractRegistry::get(AbstractRegistry::LOGGER);
        $this->assertSame($logger, $result);
        $this->assertInstanceOf(\stdClass::class, $result);
    }

    public function testRegistrySetThrowInvalidArgumentException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $result = new \stdClass();
        AbstractRegistry::set('foo', $result);
    }

    public function testRegistryGetThrowInvalidArgumentException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        AbstractRegistry::get('foo');
    }

    public function testRegistryGetNotExistedValuesThrowInvalidArgumentException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        AbstractRegistry::get(AbstractRegistry::LOGGER);
    }
}
