<?php
namespace DesignPattern\Behavorial\Specification;

class PriceSpecification implements SpecificationInterface
{
    private $maxPrice;

    private $minPrice;

    public function __construct(?float $minPrice, ?float $maxPrice)
    {
        $this->maxPrice = $maxPrice;
        $this->minPrice = $minPrice;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        if ($this->maxPrice && $item->getPrice() > $this->maxPrice) {
            return false;
        }

        if ($this->minPrice && $item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;
    }
}
