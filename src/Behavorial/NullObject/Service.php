<?php
namespace DesignPattern\Behavorial\NullObject;

class Service
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function work(): void
    {
        $this->logger->log(__METHOD__);
    }
}
