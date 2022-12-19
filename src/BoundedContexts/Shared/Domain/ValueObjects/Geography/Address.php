<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Geography;

class Address
{
    public function __construct(
        private readonly Street $street_line_1,
        private readonly ?Street $street_line_2 = null,
        private readonly ?Region $region  = null,
        private readonly City $city,
        private readonly PostalCode $postalCode,
        private readonly CountryCode $countryCode,
        private readonly Coordinate $coordinate
    ) {
    }

    public function streetLine1(): Street
    {
        return $this->street_line_1;
    }

    public function streetLine2(): ?Street
    {
        return $this->street_line_2;
    }

    public function region(): ?Region
    {
        return $this->region;
    }

    public function city(): City
    {
        return $this->city;
    }

    public function postalCode(): PostalCode
    {
        return $this->postalCode;
    }

    public function country(): CountryCode
    {
        return $this->countryCode;
    }

    public function coordinate(): Coordinate
    {
        return $this->coordinate;
    }
}
