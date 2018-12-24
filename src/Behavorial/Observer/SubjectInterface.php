<?php
namespace DesignPattern\Behavorial\Observer;

interface SubjectInterface
{
    public function attach(ObserverInterface $observer);

    public function dettach(ObserverInterface $observer);

    public function notify();
}
