<?php
namespace DesignPattern\Structural\DependencyInjection;

class DatabaseConfiguration
{
    private $host;

    private $port;

    private $username;

    private $password;

    public function __construct(string $host, string $port, string $username, string $password)
    {
        $this->host     = $host;
        $this->port     = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function host(): string
    {
        return $this->host;
    }

    public function port(): string
    {
        return $this->port;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function password(): string
    {
        return $this->password;
    }
}
