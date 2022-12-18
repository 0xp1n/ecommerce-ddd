<?php

namespace Tests\Ecommerce\Customers\Domain\MotherObjects;

use Ecommerce\Customers\Domain\CustomerPhoneNumber;
use Tests\Shared\Domain\MotherObjects\PhoneNumberMother;

class CustomerPhoneNumberMother
{
    public static function create(string $email = null): CustomerPhoneNumber
    {
        return new CustomerPhoneNumber($email ?? PhoneNumberMother::create());
    }
}
