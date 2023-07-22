<?php

namespace DesignPatterns\Tests\Visitor\Tests;

require_once __DIR__ . '/../RoleVisitorInterface.php';
require_once __DIR__ . '/../RolePrintVisitor.php';
require_once __DIR__ . '/../Role.php';
require_once __DIR__ . '/../User.php';
require_once __DIR__ . '/../Group.php';

use DesignPatterns\Behavioral\Visitor\User;
use DesignPatterns\Behavioral\Visitor\Group;
use DesignPatterns\Behavioral\Visitor\Role;
use DesignPatterns\Behavioral\Visitor\RolePrintVisitor;
use DesignPatterns\Behavioral\Visitor;
use PHPUnit\Framework\TestCase;

/**
 * VisitorTest 用于测试访问者模式
 */
class VisitorTest extends TestCase
{

    protected $visitor;

    protected function setUp(): void
    {
        $this->visitor = new Visitor\RolePrintVisitor();
    }

    public function getRole()
    {
        return array(
            array(new Visitor\User("Dominik"), 'Role: User Dominik'),
            array(new Visitor\Group("Administrators"), 'Role: Group: Administrators')
        );
    }

    /**
     * @dataProvider getRole
     */
    public function testVisitSomeRole(Visitor\Role $role, $expect)
    {
        $this->expectOutputString($expect);
        $role->accept($this->visitor);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Mock
     */
    public function testUnknownObject()
    {
        $mock = $this->getMockForAbstractClass('DesignPatterns\Behavioral\Visitor\Role');
        $mock->accept($this->visitor);
    }
}