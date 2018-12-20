<?php
namespace DesignPattern\Creational\Builder;

class Director
{
    public function build(BuilderInterface $builder): string
    {
        $builder->setTitle();
        $builder->setMessage();

        return $builder->getResult();
    }
}
