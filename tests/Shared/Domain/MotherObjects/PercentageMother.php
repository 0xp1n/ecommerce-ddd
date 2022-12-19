<?php

namespace Tests\Shared\Domain\MotherObjects;

class PercentageMother
{
    public static function create(): int
    {
        return MotherCreator::random()->numberBetween(1, 100);
    }
}
