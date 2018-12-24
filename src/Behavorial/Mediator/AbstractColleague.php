<?php
namespace DesignPattern\Behavorial\Mediator;

abstract class AbstractColleague
{
    protected $mediator;

    public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }
}
