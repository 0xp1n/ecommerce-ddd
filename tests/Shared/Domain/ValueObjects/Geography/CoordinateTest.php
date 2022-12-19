<?php

namespace Tests\Shared\Domain\ValueObjects\Geography;

use Shared\Domain\ValueObjects\Geography\Latitude;
use Shared\Domain\ValueObjects\Geography\Longitude;
use Tests\Shared\Domain\MotherObjects\CoordinateMother;
use Tests\TestCase;

class CoordinateTest extends TestCase
{
    public function test_it_should_throw_exception_when_latitude_is_not_on_valid_range(): void
    {
        $latitude = 90.1;

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("The value that represents latitude {$latitude} is not in the range between -90 and 90");

        new Latitude($latitude);
    }

    public function test_it_should_throw_exception_when_longitude_is_not_on_valid_range(): void
    {
        $longitude = -180.1;

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("The value that represents longitude {$longitude} is not in the range between -180 and 180");

        new Longitude($longitude);
    }

    public function test_it_should_initialize_coordinates_when_latitude_and_longitude_are_correct(): void
    {
        $this->expectNotToPerformAssertions();

        CoordinateMother::create();
        CoordinateMother::create();
        CoordinateMother::create();
        CoordinateMother::create();
    }
}
