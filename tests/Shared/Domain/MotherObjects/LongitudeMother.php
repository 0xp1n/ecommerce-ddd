<?php

namespace Tests\Shared\Domain\MotherObjects;

class LongitudeMother
{
    public static function create(): string
    {
        return MotherCreator::random()->longitude();
    }
}
