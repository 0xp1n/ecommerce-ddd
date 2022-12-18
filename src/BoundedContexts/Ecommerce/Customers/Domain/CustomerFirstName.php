<?php

namespace Ecommerce\Customers\Domain;

use Shared\Domain\ValueObjects\Generic\Text;

class CustomerFirstName extends Text
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
}
