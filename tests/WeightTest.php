<?php

use Rattanak\UnitConversions\Weight;

it('can convert kilograms to lsb', function () {
    $lbs = Weight::fromKilograms(100)->toLbs();

    $this->assertEquals(220.462, $lbs);
});
