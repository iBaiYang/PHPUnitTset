<?php

namespace DesignPatterns\Structural\Adapter\Tests;

require_once __DIR__ . '/../EBookAdapter.php';
require_once __DIR__ . '/../Kindle.php';
require_once __DIR__ . '/../PaperBookInterface.php';
require_once __DIR__ . '/../Book.php';

use DesignPatterns\Structural\Adapter\EBookAdapter;
use DesignPatterns\Structural\Adapter\Kindle;
use DesignPatterns\Structural\Adapter\PaperBookInterface;
use DesignPatterns\Structural\Adapter\Book;
use PHPUnit\Framework\TestCase;

/**
 * AdapterTest 用于测试适配器模式
 */
class AdapterTest extends TestCase
{
    /**
     * @return array
     */
    public function getBook()
    {
        return array(
            array(new Book()),
            // 我们在适配器中引入了电子书
            array(new EBookAdapter(new Kindle()))
        );
    }

    /**
     * 客户端只知道有纸质书，实际上第二本书是电子书，
     * 但是对客户来说代码一致，不需要做任何改动
     *
     * @param PaperBookInterface $book
     *
     * @dataProvider getBook
     */
    public function testIAmAnOldClient(PaperBookInterface $book)
    {
        $this->assertTrue(method_exists($book, 'open'));
        $this->assertTrue(method_exists($book, 'turnPage'));
    }
}