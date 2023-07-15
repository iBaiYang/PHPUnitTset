<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

require_once __DIR__ . '/../Colleague.php';

use DesignPatterns\Behavioral\Mediator\Colleague;

/**
 * Database提供数据库服务
 */
class Database extends Colleague
{
    /**
     * @return string
     */
    public function getData()
    {
        return "World";
    }
}