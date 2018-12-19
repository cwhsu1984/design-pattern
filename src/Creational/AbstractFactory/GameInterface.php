<?php
namespace DesignPattern\Creational\AbstractFactory;

interface GameInterface
{
    public function createUser(string $username): string;
}
