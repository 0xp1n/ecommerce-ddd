<?php

namespace Tests\Shared\Domain\MotherObjects;

class UnsignedIntegerMother
{
    public static function create(): string
    {
        return MotherCreator::random()->numberBetween();
    }
}
