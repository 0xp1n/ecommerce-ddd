<?php

namespace Tests\Shared\Domain\MotherObjects;

class LatitudeMother
{
    public static function create(): string
    {
        return MotherCreator::random()->latitude();
    }
}
