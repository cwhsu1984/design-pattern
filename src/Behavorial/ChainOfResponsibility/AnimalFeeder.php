<?php
namespace DesignPattern\Behavorial\ChainOfResponsibility;

class AnimalFeeder
{
    private $next;

    private $animal;

    public function __construct(string $animal)
    {
        $this->animal = $animal;
    }

    public function feed(array $animals): array
    {
        $animals = \array_filter(
              $animals,
              function ($animal) {
                  return $animal !== $this->animal;
              }
          );

        if (empty($animals)) {
            return $animals;
        }

        if ($this->next) {
            return $this->next->feed($animals);
        }

        return $animals;
    }

    public function setNext(self $next): void
    {
        if ($this->next === null) {
            $this->next = $next;
        } else {
            $this->next->setNext($next);
        }
    }
}
