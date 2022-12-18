<?php

namespace Tests\Ecommerce\Customers\Domain\MotherObjects;

use Ecommerce\Customers\Domain\CustomerFirstName;
use Tests\Shared\Domain\MotherObjects\PersonNameMother;

class CustomerFirstNameMother
{
    public static function create(string $name = null): CustomerFirstName
    {
        return new CustomerFirstName($name ?? PersonNameMother::createFirstName());
    }
}
