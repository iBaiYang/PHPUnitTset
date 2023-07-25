<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

require_once __DIR__ . '/../ConcreteFactoryphp';

use DesignPatterns\Creational\SimpleFactory\ConcreteFactory;
use PHPUnit\Framework\TestCase;

/**
 * SimpleFactoryTest 用于测试简单工厂模式
 */
class SimpleFactoryTest extends TestCase
{
    protected $factory;

    protected function setUp(): void
    {
        $this->factory = new ConcreteFactory();
    }

    public function getType()
    {
        return array(
            array('bicycle'),
            array('other')
        );
    }

    /**
     * @dataProvider getType
     */
    public function testCreation($type)
    {
        $obj = $this->factory->createVehicle($type);
        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\VehicleInterface', $obj);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testBadType()
    {
        $this->factory->createVehicle('car');
    }
}