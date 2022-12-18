<?php

namespace Tests\Ecommerce\Customers\Domain\MotherObjects;

use Ecommerce\Customers\Domain\Customer;
use Ecommerce\Customers\Domain\CustomerEmail;
use Ecommerce\Customers\Domain\CustomerId;
use Ecommerce\Customers\Domain\CustomerName;
use Ecommerce\Customers\Domain\CustomerPhoneNumber;

class CustomerMother
{
    public static function create(
        CustomerId $id = null,
        CustomerName $name = null,
        CustomerEmail $email = null,
        CustomerPhoneNumber $phone_number = null
    ) {
        return new Customer(
            $id ?? CustomerIdMother::create(),
            $name ?? CustomerNameMother::create(),
            $email ?? CustomerEmailMother::create(),
            $phone_number ?? CustomerPhoneNumberMother::create()
        );
    }
}
