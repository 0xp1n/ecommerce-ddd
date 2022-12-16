<?php

namespace Tests\Shared\Domain\MotherObjects;

class EmailMother
{
    public static function create(): string
    {
        return MotherCreator::random()->email();
    }

    public static function createCompanyEmail(): string
    {
        return MotherCreator::random()->companyEmail();
    }
}
