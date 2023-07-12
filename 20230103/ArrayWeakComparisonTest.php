<?php

use PHPUnit\Framework\TestCase;

class ArrayWeakComparisonTest extends TestCase
{
    /**
     * @test
     */
    public function testEquality() {
        $this->assertEquals(
            [1, 2, 3, 4, 5, 6],
            ['1', 2, 33, 4, 5, 6]
        );
    }
}