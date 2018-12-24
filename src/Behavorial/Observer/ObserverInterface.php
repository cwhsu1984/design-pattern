<?php
namespace DesignPattern\Behavorial\Observer;

interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}
