<?php

namespace Kalinkin\Meta;

class MetaService
{
    protected $property = "strength";
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getPropertyValue()
    {
        return $this->property . ' ' . $this->value;
    }
}