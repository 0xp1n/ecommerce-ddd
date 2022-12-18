<?php

namespace Tests\Ecommerce\Customers\Domain\MotherObjects;

use Ecommerce\Customers\Domain\CustomerEmail;
use Tests\Shared\Domain\MotherObjects\EmailMother;

class CustomerEmailMother
{
    public static function create(string $email = null): CustomerEmail
    {
        return new CustomerEmail($email ?? EmailMother::create());
    }
}
