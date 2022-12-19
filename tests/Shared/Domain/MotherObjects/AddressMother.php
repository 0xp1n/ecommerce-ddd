<?php

namespace Tests\Shared\Domain\MotherObjects;

use Shared\Domain\ValueObjects\Geography\Address;
use Shared\Domain\ValueObjects\Geography\City;
use Shared\Domain\ValueObjects\Geography\Street;

class AddressMother
{
    public static function create(): Address
    {
        $postal_code = PostalCodeMother::create();

        return new Address(
            street_line_1: new Street(StreetMother::create()),
            street_line_2: null,
            region: null,
            city: new City(CityMother::create()),
            postalCode: $postal_code,
            countryCode: $postal_code->country(),
            coordinate: CoordinateMother::create()
        );
    }
}
