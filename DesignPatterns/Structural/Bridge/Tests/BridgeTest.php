<?php

namespace DesignPatterns\Structural\Bridge\Tests;

require_once __DIR__ . '/../Assemble.php';
require_once __DIR__ . '/../Car.php';
require_once __DIR__ . '/../Motorcycle.php';
require_once __DIR__ . '/../Produce.php';

use DesignPatterns\Structural\Bridge\Assemble;
use DesignPatterns\Structural\Bridge\Car;
use DesignPatterns\Structural\Bridge\Motorcycle;
use DesignPatterns\Structural\Bridge\Produce;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCar()
    {
        $vehicle = new Car(new Produce(), new Assemble());
        $this->expectOutputString('Car Produced Assembled');
        $vehicle->manufacture();
    }

    public function testMotorcycle()
    {
        $vehicle = new Motorcycle(new Produce(), new Assemble());
        $this->expectOutputString('Motorcycle Produced Assembled');
        $vehicle->manufacture();
    }
}