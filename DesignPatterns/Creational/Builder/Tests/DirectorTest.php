<?php

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\BuilderInterface;
use PHPUnit\Framework\TestCase;

/**
 * DirectorTest 用于测试建造者模式
 */
class DirectorTest extends TestCase
{

    protected $director;

    protected function setUp(): void
    {
        $this->director = new Director();
    }

    public function getBuilder()
    {
        return array(
            array(new CarBuilder()),
            array(new BikeBuilder())
        );
    }

    /**
     * 这里我们测试建造过程，客户端并不知道具体的建造者。
     *
     * @dataProvider getBuilder
     */
    public function testBuild(BuilderInterface $builder)
    {
        $newVehicle = $this->director->build($builder);
        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Parts\Vehicle', $newVehicle);
    }
}