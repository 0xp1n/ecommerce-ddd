<?php

namespace Ecommerce\Customers\Domain;

use Shared\Domain\ValueObjects\Generic\Text;

class CustomerName extends Text
{
    public function __construct(
        private readonly CustomerFirstName $firstName,
        private readonly CustomerLastName $lastName
    ) {
        parent::__construct($this->firstName->sanitize() . ' ' . $this->lastName->sanitize());
    }

    public function firstName(): string
    {
        return $this->firstName->sanitize();
    }

    public function lastName(): string
    {
        return $this->lastName->sanitize();
    }

    public function fullName(): string
    {
        return $this->value;
    }
}
