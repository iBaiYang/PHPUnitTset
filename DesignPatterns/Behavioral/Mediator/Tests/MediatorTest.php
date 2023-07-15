<?php

namespace DesignPatterns\Tests\Mediator\Tests;

require_once __DIR__ . '/../Mediator.php';
require_once __DIR__ . '/../Subsystem/Database.php';
require_once __DIR__ . '/../Subsystem/Client.php';
require_once __DIR__ . '/../Subsystem/Server.php';

use DesignPatterns\Behavioral\Mediator\Mediator;
use DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use DesignPatterns\Behavioral\Mediator\Subsystem\Server;
use PHPUnit\Framework\TestCase;

/**
 * MediatorTest tests hello world
 */
class MediatorTest extends TestCase
{
    protected $client;

    protected function setUp(): void
    {
        $media = new Mediator();
        $this->client = new Client($media);
        $media->setColleague(new Database($media), $this->client, new Server($media));
    }

    public function testOutputHelloWorld()
    {
        // 测试是否输出 Hello World :
        $this->expectOutputString('Hello World');
        // 正如你所看到的, Client, Server 和 Database 是完全解耦的
        $this->client->request();
    }
}