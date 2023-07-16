<?php

namespace DesignPatterns\More\Delegation\Tests;

require_once __DIR__ . '/../JuniorDeveloper.php';
require_once __DIR__ . '/../TeamLead.php';

use DesignPatterns\More\Delegation;
use PHPUnit\Framework\TestCase;

/**
 * DelegationTest 用于测试委托模式
 */
class DelegationTest extends TestCase
{
    public function testHowTeamLeadWriteCode()
    {
        $junior = new Delegation\JuniorDeveloper();
        $teamLead = new Delegation\TeamLead($junior);
        $this->assertEquals($junior->writeBadCode(), $teamLead->writeCode());
    }
}