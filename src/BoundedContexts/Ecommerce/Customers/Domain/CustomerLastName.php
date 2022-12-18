<?php

namespace Ecommerce\Customers\Domain;

use Shared\Domain\ValueObjects\Generic\Text;

class CustomerLastName extends Text
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
}
