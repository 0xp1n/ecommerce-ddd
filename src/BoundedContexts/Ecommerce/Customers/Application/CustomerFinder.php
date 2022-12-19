<?php

namespace Ecommerce\Customers\Application;

use Ecommerce\Customers\Domain\Customer;
use Ecommerce\Customers\Domain\CustomerId;
use Ecommerce\Customers\Domain\Exceptions\CustomerNotExists;
use Ecommerce\Customers\Domain\Persistence\CustomerRepository;

final class CustomerFinder
{
    public function __construct(private readonly CustomerRepository $repository)
    {
    }

    public function __invoke(CustomerId $id): Customer
    {
        if ($customer = $this->repository->find($id)) {
            return $customer;
        }

        throw new CustomerNotExists("The customer does not exist");
    }
}
