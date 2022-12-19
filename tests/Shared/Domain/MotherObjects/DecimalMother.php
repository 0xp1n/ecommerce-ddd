<?php

namespace Tests\Shared\Domain\MotherObjects;

class DecimalMother
{
    public static function create(): float
    {
        return MotherCreator::random()->randomFloat();
    }
}
