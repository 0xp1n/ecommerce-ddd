<?php

namespace Tests\Shared\Domain\MotherObjects;

class CityMother
{
    public static function create(string $locale = 'en_US'): string
    {
        return MotherCreator::random($locale)->city();
    }
}
