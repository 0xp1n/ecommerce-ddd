<?php

namespace Tests\Shared\Domain\MotherObjects;

class PostalCodeMother
{
    public static function create(): int
    {
        return MotherCreator::random()->postcode();
    }
}
