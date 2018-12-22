<?php
namespace DesignPattern\Behavorial\Command;

class DecreaseCommand implements CommandInterface
{
    private $counter;

    public function __construct(Counter $counter)
    {
        $this->counter = $counter;
    }

    public function execute(): void
    {
        $this->counter->decrease();
    }
}
