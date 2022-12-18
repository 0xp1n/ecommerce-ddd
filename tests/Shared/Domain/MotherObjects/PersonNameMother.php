<?php

namespace Tests\Shared\Domain\MotherObjects;

class PersonNameMother
{
    public static function create(): string
    {
        return MotherCreator::random()->name();
    }

    public static function createFirstName(): string
    {
        return MotherCreator::random()->firstName();
    }

    public static function createLastName(): string
    {
        return MotherCreator::random()->lastName();
    }
}
