<?php

use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);
    }
}