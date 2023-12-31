<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

require_once __DIR__ . '/../AbstractFactory.php';
require_once __DIR__ . '/../HtmlFactory.php';
require_once __DIR__ . '/../JsonFactory.php';

use DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
use PHPUnit\Framework\TestCase;

/**
 * AbstractFactoryTest 用于测试具体的工厂
 */
class AbstractFactoryTest extends TestCase
{
    public function getFactories()
    {
        return array(
            array(new JsonFactory()),
            array(new HtmlFactory())
        );
    }

    /**
     * 这里是工厂的客户端，我们无需关心传递过来的是什么工厂类，
     * 只需以我们想要的方式渲染任意想要的组件即可。
     *
     * @dataProvider getFactories
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = array(
            $factory->createText('php学院'),
            $factory->createPicture('/image.jpg', 'php-academy'),
            $factory->createText('phpAcademy.org')
        );

        $this->assertContainsOnly('DesignPatterns\Creational\AbstractFactory\MediaInterface', $article);
    }
}