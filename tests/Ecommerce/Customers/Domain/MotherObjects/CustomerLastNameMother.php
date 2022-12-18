<?php

namespace Tests\Ecommerce\Customers\Domain\MotherObjects;

use Ecommerce\Customers\Domain\CustomerLastName;
use Tests\Shared\Domain\MotherObjects\PersonNameMother;

class CustomerLastNameMother
{
    public static function create(string $name = null): CustomerLastName
    {
        return new CustomerLastName($name ?? PersonNameMother::createLastName());
    }
}
