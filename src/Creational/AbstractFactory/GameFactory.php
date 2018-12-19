<?php
namespace DesignPattern\Creational\AbstractFactory;

class GameFactory
{
    public function createActionGame(): ActionGame
    {
        return new ActionGame();
    }

    public function createCardGame(): CardGame
    {
        return new CardGame();
    }
}
