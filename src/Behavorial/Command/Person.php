<?php
namespace DesignPattern\Behavorial\Command;

class Person
{
    private $commands;

    public function add(CommandInterface $command): void
    {
        $this->commands[] = $command;
    }

    public function work(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}
