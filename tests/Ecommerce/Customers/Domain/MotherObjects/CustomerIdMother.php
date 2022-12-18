<?php

namespace Tests\Ecommerce\Customers\Domain\MotherObjects;

use Ecommerce\Customers\Domain\CustomerId;

class CustomerIdMother
{
    public static function create(int|string $id = null): CustomerId
    {
        return new CustomerId($id);
    }
}
