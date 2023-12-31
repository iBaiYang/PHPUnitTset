<?php

namespace DesignPatterns\Creational\Prototype\Tests;

require_once __DIR__ . '/../BookPrototype.php';
require_once __DIR__ . '/../FooBookPrototype.php';
require_once __DIR__ . '/../BarBookPrototype.php';

use DesignPatterns\Creational\Prototype\BookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;
use DesignPatterns\Creational\Prototype\BarBookPrototype;
use PHPUnit\Framework\TestCase;

/**
 * PrototypeTest tests the prototype pattern
 */
class PrototypeTest extends TestCase
{

    public function getPrototype(){
        return array(
            array(new FooBookPrototype()),
            array(new BarBookPrototype())
        );
    }

    /**
     * @dataProvider getPrototype
     */
    public function testCreation(BookPrototype $prototype)
    {
        $book = clone $prototype;
        $book->setTitle($book->getCategory().' Book');
        $this->assertInstanceOf('DesignPatterns\Creational\Prototype\BookPrototype', $book);
    }
}