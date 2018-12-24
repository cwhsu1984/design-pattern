<?php
namespace DesignPattern\Behavorial\Observer;

class Channel implements SubjectInterface
{
    private $observers;

    private $data;

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function dettach(ObserverInterface $observer): void
    {
        for ($i = 0; $i < \count($this->observers); $i++) {
            if ($this->observers[$i] === $observer) {
                unset($this->observers[$i]);
            }
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): void
    {
        $this->data = $data;
        $this->notify();
    }
}
