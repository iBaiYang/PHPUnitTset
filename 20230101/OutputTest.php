<?php

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    /**
     * @test
     */
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    /**
     * @test
     */
    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        print 'baz';
    }
}