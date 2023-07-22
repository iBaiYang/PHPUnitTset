<?php

namespace DesignPatterns\Behavioral\TemplateMethod\Tests;

require_once __DIR__ . '/../BeachJourney.php';
require_once __DIR__ . '/../CityJourney.php';
require_once __DIR__ . '/../Journey.php';

use DesignPatterns\Behavioral\TemplateMethod;
use DesignPatterns\Behavioral\TemplateMethod\BeachJourney;
use DesignPatterns\Behavioral\TemplateMethod\CityJourney;
use DesignPatterns\Behavioral\TemplateMethod\Journey;
use PHPUnit\Framework\TestCase;

/**
 * JourneyTest测试所有的度假
 */
class JourneyTest extends TestCase
{

    public function testBeach()
    {
        $journey = new TemplateMethod\BeachJourney();
        $this->expectOutputRegex('#sun-bathing#');
        $journey->takeATrip();
    }

    public function testCity()
    {
        $journey = new TemplateMethod\CityJourney();
        $this->expectOutputRegex('#drink#');
        $journey->takeATrip();
    }

    /**
     * 在PHPUnit中如何测试抽象模板方法
     */
    public function testLasVegas()
    {
        $journey = $this->getMockForAbstractClass('DesignPatterns\Behavioral\TemplateMethod\Journey');
        $journey->expects($this->once())
            ->method('enjoyVacation')
            ->will($this->returnCallback(array($this, 'mockUpVacation')));
        $this->expectOutputRegex('#Las Vegas#');
        $journey->takeATrip();
    }

    public function mockUpVacation()
    {
        echo "Fear and loathing in Las Vegas\n";
    }
}