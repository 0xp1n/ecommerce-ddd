<?php

namespace Tests\Shared\Domain\ValueObjects\Generic;

use Shared\Domain\ValueObjects\Generic\UnsignedInteger;
use Tests\Shared\Domain\MotherObjects\UnsignedIntegerMother;
use Tests\TestCase;

class UnsignedIntegerTest extends TestCase
{
    public function test_it_should_throw_exception_when_the_number_is_negative(): void
    {
        $number = -10;

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("The given number {$number} cannot be negative");

        new UnsignedInteger($number);
    }

    public function test_it_should_instantiate_correct_with_multiple_positive_number_values(): void
    {
        $this->expectNotToPerformAssertions();

        new UnsignedInteger(UnsignedIntegerMother::create());
        new UnsignedInteger(UnsignedIntegerMother::create());
        new UnsignedInteger(UnsignedIntegerMother::create());
        new UnsignedInteger(UnsignedIntegerMother::create());
    }
}
