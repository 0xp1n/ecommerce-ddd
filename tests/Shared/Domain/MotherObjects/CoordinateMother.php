<?php

namespace Tests\Shared\Domain\MotherObjects;

use Shared\Domain\ValueObjects\Geography\Coordinate;
use Shared\Domain\ValueObjects\Geography\Latitude;
use Shared\Domain\ValueObjects\Geography\Longitude;

class CoordinateMother
{
    public static function create(): Coordinate
    {
        return new Coordinate(
            new Latitude(LatitudeMother::create()),
            new Longitude(LongitudeMother::create())
        );
    }
}
