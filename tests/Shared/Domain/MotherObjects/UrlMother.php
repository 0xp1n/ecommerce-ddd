<?php

namespace Tests\Shared\Domain\MotherObjects;

class UrlMother
{
    public static function create(): string
    {
        return MotherCreator::random()->url();
    }
}
