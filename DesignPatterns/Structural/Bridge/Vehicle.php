<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * 抽象
 */
abstract class Vehicle
{

    protected $workShop1;
    protected $workShop2;

    protected function __construct(Workshop $workShop1, Workshop $workShop2)
    {
        $this->workShop1 = $workShop1;
        $this->workShop2 = $workShop2;
    }

    public function manufacture()
    {
    }
}