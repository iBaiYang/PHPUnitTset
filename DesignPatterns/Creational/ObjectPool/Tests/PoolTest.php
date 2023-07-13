<?php

namespace DesignPatterns\Creational\Pool\Tests;

require_once  'TestWorker.php';
require_once __DIR__ . '/../Pool.php';

use DesignPatterns\Creational\Pool\Pool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testPool()
    {
        $pool = new Pool('DesignPatterns\Creational\Pool\Tests\TestWorker');
        $worker = $pool->get();

        $this->assertEquals(1, $worker->id);

        $worker->id = 5;
        $pool->dispose($worker);

        $this->assertEquals(5, $pool->get()->id);
        $this->assertEquals(1, $pool->get()->id);
    }
}