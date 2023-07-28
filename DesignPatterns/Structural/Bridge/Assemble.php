<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * 具体实现：Assemble
 */
class Assemble implements Workshop
{
    public function work()
    {
        print 'Assembled';
    }
}