<?php

namespace Ecommerce\Customers\Domain\Persistence;

use Ecommerce\Customers\Domain\Customer;
use Ecommerce\Customers\Domain\CustomerId;

interface CustomerRepository
{
    public function find(CustomerId $id): ?Customer;
}
