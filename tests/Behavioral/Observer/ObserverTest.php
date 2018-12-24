<?php
namespace Test\Behavorial\Observer;

use DesignPattern\Behavorial\Observer\Channel;
use DesignPattern\Behavorial\Observer\Subscriber;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testSubscriberGetDataFromChannel(): void
    {
        $first   = new Subscriber();
        $channel = new Channel();
        $channel->attach($first);
        $channel->setData('news');
        $result = $first->getData();
        $this->assertEquals('news', $result);
    }

    public function testSubscriberRemoveFromChannel(): void
    {
        $first   = new Subscriber();
        $channel = new Channel();
        $channel->attach($first);
        $channel->setData('news');
        $channel->dettach($first);
        $channel->setData('good news');
        $result = $first->getData();
        $this->assertEquals('news', $result);
    }

    public function testTwoSubscriberGetDataFromChannel(): void
    {
        $first   = new Subscriber();
        $second  = new Subscriber();
        $channel = new Channel();
        $channel->attach($first);
        $channel->attach($second);
        $channel->setData('news');
        $result = $first->getData();
        $this->assertEquals('news', $result);
        $result = $second->getData();
        $this->assertEquals('news', $result);
    }

    public function testOneOfTwoSubscriberDettachFromChannel(): void
    {
        $first   = new Subscriber();
        $second  = new Subscriber();
        $channel = new Channel();
        $channel->attach($first);
        $channel->attach($second);
        $channel->setData('news');
        $channel->dettach($first);
        $channel->setData('good news');
        $result = $first->getData();
        $this->assertEquals('news', $result);
        $result = $second->getData();
        $this->assertEquals('good news', $result);
    }
}
