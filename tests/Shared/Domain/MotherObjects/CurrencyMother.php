<?php

namespace Tests\Shared\Domain\MotherObjects;

class CurrencyMother
{
    public static function create(): string
    {
        return MotherCreator::random()->currencyCode();
    }
}
