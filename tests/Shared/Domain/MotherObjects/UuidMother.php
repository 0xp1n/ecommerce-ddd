<?php

namespace Tests\Shared\Domain\MotherObjects;

class UuidMother
{
    public static function create(): string
    {
        return MotherCreator::random()->unique()->uuid();
    }
}
