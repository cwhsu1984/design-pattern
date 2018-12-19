<?php
namespace DesignPattern\Creational\AbstractFactory;

class CardGame implements GameInterface
{
    public function createUser(string $username): string
    {
        return "card game $username";
    }
}
