<?php

namespace DesignPatterns\Creational\Pool\Tests;

require_once __DIR__ . '/../Pool.php';
require_once __DIR__ . '/../Processor.php';

use DesignPatterns\Creational\Pool\Pool;
use DesignPatterns\Creational\Pool\Processor;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testPool()
    {
        $pool = new Pool('DesignPatterns\Creational\Pool\Worker');
        $client = new Processor($pool);

        $image = new \PDO("mysql:host=127.0.0.1;port=3306;dbname=db_test", "test", "123456");
        $client->process($image);

        $image2 = new \PDO("mysql:host=127.0.0.2;port=3306;dbname=db_test", "test", "123456");
        $client->process($image2);
    }
}