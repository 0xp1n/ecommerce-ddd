<?php

namespace Ecommerce\Customers\Infrastructure\Persistence;

use App\Models\Customer as EloquentCustomer;
use Ecommerce\Customers\Domain\CustomerId;
use Ecommerce\Customers\Domain\Customer;
use Ecommerce\Customers\Domain\CustomerEmail;
use Ecommerce\Customers\Domain\CustomerFirstName;
use Ecommerce\Customers\Domain\CustomerLastName;
use Ecommerce\Customers\Domain\CustomerName;
use Ecommerce\Customers\Domain\CustomerPhoneNumber;
use Ecommerce\Customers\Domain\Persistence\CustomerRepository;

class EloquentCustomerRepository implements CustomerRepository
{
    public function find(CustomerId $id): ?Customer
    {
        if ($customer = EloquentCustomer::find($id->value())) {
            return new Customer(
                $id,
                new CustomerName(
                    new CustomerFirstName($customer->first_name),
                    new CustomerLastName($customer->last_name),
                ),
                new CustomerEmail($customer->email),
                isset($customer->phone_number) ? new CustomerPhoneNumber($customer->phone_number) : null,
            );
        };

        return null;
    }
}
