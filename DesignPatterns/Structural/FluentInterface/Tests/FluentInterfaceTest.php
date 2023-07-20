<?php

namespace DesignPatterns\Structural\FluentInterface\Tests;

require_once __DIR__ . '/../Sql.php';

use DesignPatterns\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

/**
 * FluentInterfaceTest 测试流接口SQL
 */
class FluentInterfaceTest extends TestCase
{
    public function testBuildSQL()
    {
        $instance = new Sql();
        $query = $instance->select(array('foo', 'bar'))
            ->from('foobar', 'f')
            ->where('f.bar = ?')
            ->getQuery();

        $this->assertEquals('SELECT foo,bar FROM foobar AS f WHERE f.bar = ?', $query);
    }
}