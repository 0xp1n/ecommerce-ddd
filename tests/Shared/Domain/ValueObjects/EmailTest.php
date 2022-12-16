<?php

namespace Tests\Shared\Domain\ValueObjects;

use InvalidArgumentException;
use Shared\Domain\ValueObjects\Internet\Email;
use Tests\Shared\Domain\MotherObjects\EmailMother;
use Tests\TestCase;

class EmailTest extends TestCase
{
    public function test_it_should_throw_exception_when_email_is_not_valid(): void
    {
        $email = 'do you think im an email@?';

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("The value {$email} is not a valid email");

        new Email($email);
    }

    public function test_it_should_instantiate_correct_the_object_when_email_is_valid(): void
    {
        $email = new Email(EmailMother::create());
        $company_email = new Email(EmailMother::createCompanyEmail());

        $this->assertEquals($email->parts(), [$email->local(), $email->domain()]);
        $this->assertEquals($company_email->parts(), [$company_email->local(), $company_email->domain()]);
    }
}
