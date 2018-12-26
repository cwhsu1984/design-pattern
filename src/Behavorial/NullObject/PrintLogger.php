<?php
namespace DesignPattern\Behavorial\NullObject;

class PrintLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        print $message;
    }
}
