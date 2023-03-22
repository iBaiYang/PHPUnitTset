<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    //测试用例运行前初始化
    public function setUp()
    {
    }

    //测试用例运行后执行
    public function tearDown()
    {
    }

    /**
     * @test
     */
    public function testArrayIsEmpty()
    {
        $fixture = array();

        // 断言数组$fixture中元素的数目是0。
        $this->assertEquals(0, sizeof($fixture));
    }

    /**
     * @test
     */
    public function testarrayHasKey()
    {
        $arr = array(
            'id' => 666,
            'name' => 'zhangsan',
        );
        //断言$arr是一个数组
        $this->assertTrue(is_array($arr));
        //断言数组$arr中含有索引id
        $this->assertArrayHasKey('id', $arr);
        //断言数组$arr中含有索引name
        $this->assertArrayHasKey('name', $arr);
    }

}