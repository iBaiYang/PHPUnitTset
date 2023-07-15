<?php

namespace DesignPatterns\Structural\Facade\Tests;

require_once __DIR__ . '/../Facade.php';
require_once __DIR__ . '/../OsInterface.php';

use DesignPatterns\Structural\Facade\Facade as Computer;
use DesignPatterns\Structural\Facade\OsInterface;
use PHPUnit\Framework\TestCase;

/**
 * FacadeTest用于测试门面模式
 */
class FacadeTest extends TestCase
{

    public function getComputer()
    {
        $bios = $this->getMockBuilder('DesignPatterns\Structural\Facade\BiosInterface')
            ->setMethods(array('launch', 'execute', 'waitForKeyPress'))
            ->disableAutoload()
            ->getMock();
        $os = $this->getMockBuilder('DesignPatterns\Structural\Facade\OsInterface')
            ->setMethods(array('getName'))
            ->disableAutoload()
            ->getMock();
        $bios->expects($this->once())
            ->method('launch')
            ->with($os);
        $os->expects($this->once())
            ->method('getName')
            ->will($this->returnValue('Linux'));

        $facade = new Computer($bios, $os);
        return array(array($facade, $os));
    }

    /**
     * @dataProvider getComputer
     */
    public function testComputerOn(Computer $facade, OsInterface $os)
    {
        // interface is simpler :
        $facade->turnOn();
        // but I can access to lower component
        $this->assertEquals('Linux', $os->getName());
    }
}