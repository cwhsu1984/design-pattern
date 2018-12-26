<?php
namespace DesignPattern\More\ServiceLocator;

class ServiceLocator
{
    private $services = [];

    private $instantiated = [];

    private $shared = [];

    public function addInstance(string $class, $service, bool $share = true): void
    {
        $this->services[$class]     = $service;
        $this->instantiated[$class] = $service;
        $this->shared[$class]       = $share;
    }

    public function addClass(string $class, array $params, bool $share = true): void
    {
        $this->services[$class] = $params;
        $this->shared[$class]   = $share;
    }

    public function has(string $class): bool
    {
        return isset($this->services[$class]) || isset($this->instantiated[$class]);
    }

    public function get(string $class)
    {
        if ($this->isInstantiatedAndCanShare($class)) {
            return $this->instantiated[$class];
        }

        $instance = $this->createNewInstance($class);

        if ($this->shared[$class]) {
            $this->instantiated[$class] = $instance;
        }

        return $instance;
    }

    private function isInstantiatedAndCanShare(string $class): bool
    {
        return isset($this->instantiated[$class]) && $this->shared[$class];
    }

    private function createNewInstance(string $class)
    {
        $params     = $this->services[$class];
        $reflection = new \ReflectionClass($class);

        if (\is_array($params)) {
            return $reflection->newInstanceArgs($params);
        }

        return $reflection;
    }
}
