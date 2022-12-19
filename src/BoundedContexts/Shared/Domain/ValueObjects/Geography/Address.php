<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Geography;

class Address
{
    public function __construct(private readonly CountryCode $countryCode)
    {
    }
}
