<?php
namespace DesignPattern\Structural\DependencyInjection;

class DatabaseConnection
{
    private $configuration;

    public function __construct(DatabaseConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getDsn(): string
    {
        $config = $this->configuration;

        return "{$config->username()}:{$config->password()}@{$config->host()}:{$config->port()}";
    }
}
