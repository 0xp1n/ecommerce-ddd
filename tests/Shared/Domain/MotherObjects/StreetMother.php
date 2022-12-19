<?php

namespace Tests\Shared\Domain\MotherObjects;

class StreetMother
{
    public static function create(string $locale = 'en_US'): string
    {
        return MotherCreator::random($locale)->streetAddress();
    }
}
