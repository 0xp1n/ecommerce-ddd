<?php

declare(strict_types=1);

namespace Ecommerce\Customers\Domain;

use Shared\Domain\AggregateRoot;

class Customer extends AggregateRoot
{
    public function __construct(
        private readonly CustomerName $name,
        private readonly CustomerPhoneNumber $phoneNumber
    ) {
    }
}
