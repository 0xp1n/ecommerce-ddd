<?php

namespace Tests\Shared\Domain\MotherObjects;

use Shared\Domain\ValueObjects\Geography\CountryCode;
use Shared\Domain\ValueObjects\Geography\PostalCode;

class PostalCodeMother
{
    public static function create(CountryCode $countryCode =  null): PostalCode
    {
        return new PostalCode(
            MotherCreator::random('en_GB')->postcode(),
            $countryCode ?? new CountryCode('GB')
        );
    }
}
