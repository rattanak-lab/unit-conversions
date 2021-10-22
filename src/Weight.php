<?php

namespace Rattanak\UnitConversions;

class Weight
{
    private float $kilograms;

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function toLbs()
    {
        return $this->kilograms * 2.20462;
    }
}
