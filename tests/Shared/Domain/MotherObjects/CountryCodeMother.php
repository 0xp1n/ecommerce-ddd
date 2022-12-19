<?php

namespace Tests\Shared\Domain\MotherObjects;

class CountryCodeMother
{
    public static function create(): string
    {
        return MotherCreator::random()->countryCode();
    }
}
