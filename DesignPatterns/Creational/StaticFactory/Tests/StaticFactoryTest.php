<?php

namespace DesignPatterns\Creational\StaticFactory\Tests;

require_once __DIR__ . '/../StaticFactory';

use DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

/**
 * 测试静态工厂模式
 *
 */
class StaticFactoryTest extends TestCase
{
    public function getTypeList()
    {
        return array(
            array('string'),
            array('number')
        );
    }

    /**
     * @dataProvider getTypeList
     */
    public function testCreation($type)
    {
        $obj = StaticFactory::factory($type);
        $this->assertInstanceOf('DesignPatterns\Creational\StaticFactory\FormatterInterface', $obj);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory("");
    }
}