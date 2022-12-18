<?php

namespace Tests\Shared\Domain\MotherObjects;

class UnsignedIntegerMother
{
    public static function create(): int
    {
        return MotherCreator::random()->numberBetween();
    }
}
