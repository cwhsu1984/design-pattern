<?php
namespace DesignPattern\Creational\AbstractFactory;

class ActionGame implements GameInterface
{
    public function createUser(string $username): string
    {
        return "action game $username";
    }
}
