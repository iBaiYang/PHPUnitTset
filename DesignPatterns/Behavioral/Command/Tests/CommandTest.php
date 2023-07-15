<?php

namespace DesignPatterns\Behavioral\Command\Tests;

require_once __DIR__ . '/../Invoker.php';
require_once __DIR__ . '/../Receiver.php';
require_once __DIR__ . '/../HelloCommand.php';

use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Behavioral\Command\HelloCommand;
use PHPUnit\Framework\TestCase;

/**
 * CommandTest在命令模式中扮演客户端角色
 */
class CommandTest extends TestCase
{
    /**
     * @var Invoker
     */
    protected $invoker;

    /**
     * @var Receiver
     */
    protected $receiver;

    protected function setUp(): void
    {
        $this->invoker = new Invoker();
        $this->receiver = new Receiver();
    }

    public function testInvocation()
    {
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->expectOutputString('Hello World');
        $this->invoker->run();
    }
}