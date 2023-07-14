<?php

namespace DesignPatterns\Behavioral\Observer\Tests;

require_once __DIR__ . '/../User.php';
require_once __DIR__ . '/../UserObserver.php';

use DesignPatterns\Behavioral\Observer\UserObserver;
use DesignPatterns\Behavioral\Observer\User;
use PHPUnit\Framework\TestCase;

/**
 * ObserverTest 测试观察者模式
 */
class ObserverTest extends TestCase
{
    protected $observer;

    protected function setUp(): void
    {
        $this->observer = new UserObserver();
    }

    /**
     * 测试通知
     */
    public function testNotify()
    {
        $this->expectOutputString('DesignPatterns\Behavioral\Observer\User has been updated');
        $subject = new User();

        $subject->attach($this->observer);
        $subject->property = 123;
    }

    /**
     * 测试订阅
     */
    public function testAttachDetach()
    {
        $subject = new User();
        $reflection = new \ReflectionProperty($subject, 'observers');

        $reflection->setAccessible(true);
        /** @var \SplObjectStorage $observers */
        $observers = $reflection->getValue($subject);

        $this->assertInstanceOf('SplObjectStorage', $observers);
        $this->assertFalse($observers->contains($this->observer));

        $subject->attach($this->observer);
        $this->assertTrue($observers->contains($this->observer));

        $subject->detach($this->observer);
        $this->assertFalse($observers->contains($this->observer));
    }

    /**
     * 测试 update() 调用
     */
    public function testUpdateCalling()
    {
        $subject = new User();
        $observer = $this->getMock('SplObserver');
        $subject->attach($observer);

        $observer->expects($this->once())
            ->method('update')
            ->with($subject);

        $subject->notify();
    }
}