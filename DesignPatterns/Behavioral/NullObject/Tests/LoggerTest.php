<?php
namespace DesignPatterns\Behavioral\NullObject\Tests;

//require_once '../LoggerInterface.php';
//require_once '../NullLogger.php';
//require_once '../Service.php';
//require_once '../PrintLogger.php';

require_once __DIR__ . '/../LoggerInterface.php';
require_once __DIR__ . '/../NullLogger.php';
require_once __DIR__ . '/../Service.php';
require_once __DIR__ . '/../PrintLogger.php';

use PHPUnit\Framework\TestCase;

use DesignPatterns\Behavioral\NullObject\NullLogger;
use DesignPatterns\Behavioral\NullObject\Service;
use DesignPatterns\Behavioral\NullObject\PrintLogger;

/**
 * LoggerTest 用于测试不同的Logger
 */
class LoggerTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');  // 没有输出
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in DesignPatterns\Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
