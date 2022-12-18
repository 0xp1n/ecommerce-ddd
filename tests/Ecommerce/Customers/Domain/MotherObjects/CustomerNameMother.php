<?php

namespace Tests\Ecommerce\Customers\Domain\MotherObjects;

use Ecommerce\Customers\Domain\CustomerName;

class CustomerNameMother
{
    public static function create(string $first_name = null, string $last_name = null): CustomerName
    {
        return new CustomerName(
            $name ?? CustomerFirstNameMother::create(),
            $last_name ??  CustomerLastNameMother::create()
        );
    }
}
