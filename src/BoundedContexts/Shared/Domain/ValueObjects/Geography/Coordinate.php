<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Geography;

class Coordinate
{
    public function __construct(
        private readonly Latitude $latitude,
        private readonly Longitude  $longitude
    ) {
    }

    public function latitude(): Latitude
    {
        return $this->latitude;
    }

    public function longitude(): Longitude
    {
        return $this->longitude;
    }
}
