<?php

namespace Tests\Shared\Domain\MotherObjects;

class IntegerMother
{
    public static function create(): int
    {
        return MotherCreator::random()->numberBetween(-5000);
    }
}
