<?php
namespace Tests\Creational\AbstractFactory;

use DesignPattern\Creational\AbstractFactory\ActionGame;
use DesignPattern\Creational\AbstractFactory\CardGame;
use DesignPattern\Creational\AbstractFactory\GameFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    private function createFactory(): GameFactory
    {
        return new GameFactory();
    }

    public function testCanCreateCardGame(): void
    {
        $factory = $this->createFactory();
        $game    = $factory->createCardGame();
        $this->assertInstanceOf(CardGame::class, $game);
    }

    public function testCanCreateActionGame(): void
    {
        $factory = $this->createFactory();
        $game    = $factory->createActionGame();
        $this->assertInstanceOf(ActionGame::class, $game);
    }

    public function testCardGameCanCreateUser()
    {
        $factory = $this->createFactory();
        $game    = $factory->createCardGame();
        $this->assertEquals('card game user', $game->createUser('user'));
    }

    public function testActionGameCanCreateUser()
    {
        $factory = $this->createFactory();
        $game    = $factory->createActionGame();
        $this->assertEquals('action game user', $game->createUser('user'));
    }
}
