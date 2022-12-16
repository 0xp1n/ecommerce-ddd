<?php

namespace Tests\Shared\Domain\ValueObjects;

use InvalidArgumentException;
use Shared\Domain\ValueObjects\Generic\UUID;
use Tests\Shared\Domain\MotherObjects\UuidMother;
use Tests\TestCase;

class UUIDTest extends TestCase
{
    public function test_should_throw_exception_when_value_is_not_uuid(): void
    {
        $value = 'im not a UUID-129819211';

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("The value {$value} is not a valid UUID");

        new UUID($value);
    }

    public function test_should_throw_exception_when_uuid_is_malformed(): void
    {
        $value = UuidMother::create() . "-120101";

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("The value {$value} is not a valid UUID");

        new UUID($value);
    }

    public function test_should_instantiate_correctly_with_valid_uuids(): void
    {
        $this->expectNotToPerformAssertions();

        new UUID(UuidMother::create());
        new UUID(UuidMother::create());
        new UUID(UuidMother::create());
    }
}
