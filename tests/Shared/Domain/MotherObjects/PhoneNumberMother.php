<?php

namespace Tests\Shared\Domain\MotherObjects;

class PhoneNumberMother
{
    public static function create(): string
    {
        return MotherCreator::random()->phoneNumber();
    }
}
