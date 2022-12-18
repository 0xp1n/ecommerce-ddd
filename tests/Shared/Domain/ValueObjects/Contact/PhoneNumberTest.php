<?php

namespace Tests\Shared\Domain\ValueObjects\Contact;

use Shared\Domain\ValueObjects\Contact\PhoneNumber;
use Tests\Shared\Domain\MotherObjects\PhoneNumberMother;
use Tests\TestCase;

class PhoneNumberTest extends TestCase
{
    public function test_it_should_throw_exception_when_phone_number_is_not_valid(): void
    {
        $invalid_number = "superman3931";

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("The phone number {$invalid_number} is not valid");

        new PhoneNumber($invalid_number);
    }

    public function test_it_should_instantiate_correct_the_object_when_phone_number_have_multiple_formats(): void
    {
        $phone_number = '685999199';
        $this->assertEquals($phone_number, (new PhoneNumber($phone_number))->value());

        $phone_number = '+34100209100';
        $this->assertEquals($phone_number, (new PhoneNumber($phone_number))->value());

        $phone_number = '+34 100 192 678';
        $this->assertEquals('+34100192678', (new PhoneNumber($phone_number))->value());

        $phone_number = '  +34 100-192-678  ';
        $this->assertEquals('+34100-192-678', (new PhoneNumber($phone_number))->value());
    }

    public function test_it_should_instantiate_correct_with_multiple_random_valid_values(): void
    {
        $this->expectNotToPerformAssertions();

        new PhoneNumber(PhoneNumberMother::create());
        new PhoneNumber(PhoneNumberMother::create());
        new PhoneNumber(PhoneNumberMother::create());
        new PhoneNumber(PhoneNumberMother::create());
    }
}
