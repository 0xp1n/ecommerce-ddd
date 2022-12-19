<?php

declare(strict_types=1);

namespace Ecommerce\Customers\Domain;

use Shared\Domain\AggregateRoot;

class Customer extends AggregateRoot
{
    public function __construct(
        private readonly CustomerId $id,
        private readonly CustomerName $name,
        private readonly CustomerEmail $email,
        private readonly ?CustomerPhoneNumber $phone_number = null,
        private readonly ?CustomerAddress $address =  null,
    ) {
    }

    public function id(): CustomerId
    {
        return $this->id;
    }

    public function name(): CustomerName
    {
        return $this->name;
    }

    public function email(): CustomerEmail
    {
        return $this->email;
    }

    public function phone_number(): ?CustomerPhoneNumber
    {
        return $this->phone_number;
    }

    public function address(): ?CustomerAddress
    {
        return $this->address;
    }
}
