<?php
namespace DesignPattern\Behavorial\Observer;

class Subscriber implements ObserverInterface
{
    private $data;

    public function update(SubjectInterface $subject): void
    {
        if ($subject instanceof Channel) {
            $this->data = $subject->getData();
        }
    }

    public function getData(): string
    {
        return $this->data;
    }
}
