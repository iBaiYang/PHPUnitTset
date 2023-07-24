<?php

namespace DesignPatterns\More\EAV;

use SplObjectStorage;

class Attribute
{
    /**
     * @var SplObjectStorage
     */
    private $values;

    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->values = new SplObjectStorage();
        $this->name = $name;
    }

    public function addValue(Value $value)
    {
        $this->values->attach($value);
    }

    public function getValues(): SplObjectStorage
    {
        return $this->values;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}