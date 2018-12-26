<?php
namespace DesignPattern\Behavorial\NullObject;

class NullLogger implements LoggerInterface
{
    public function log(string $message): void
    {
    }
}
