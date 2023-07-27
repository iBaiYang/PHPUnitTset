<?php

namespace DesignPatterns\Creational\Singleton\Tests;

require_once __DIR__ . '/../Singleton.php';

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

/**
 * SingletonTest用于测试单例模式
 */
class SingletonTest extends TestCase
{

    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Singleton', $firstCall);
        $secondCall = Singleton::getInstance();
        $this->assertSame($firstCall, $secondCall);
    }

    public function testNoConstructor()
    {
        $obj = Singleton::getInstance();

        $refl = new \ReflectionObject($obj);
        $meth = $refl->getMethod('__construct');
        $this->assertTrue($meth->isPrivate());
    }
}