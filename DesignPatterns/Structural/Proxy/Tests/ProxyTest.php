<?php

namespace DesignPatterns\Structural\Proxy\Tests;

require_once __DIR__ . '/../Record.php';
require_once __DIR__ . '/../RecordProxy.php';

use DesignPatterns\Structural\Proxy\Record;
use DesignPatterns\Structural\Proxy\RecordProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testSetAttribute(){
        $data = [];
        $proxy = new RecordProxy($data);
        $proxy->xyz = false;
        $this->assertTrue($proxy->xyz===false);
    }
}