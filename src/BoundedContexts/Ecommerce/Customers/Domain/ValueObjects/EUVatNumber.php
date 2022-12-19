<?php

namespace Ecommerce\Customers\Domain\ValueObjects;

use Shared\Domain\ValueObjects\Generic\Text;

class EUVatNumber extends Text
{
    public function __construct(string $value)
    {
        $this->validate($value);
        parent::__construct($value);
    }

    private function validate(string $value): void
    {
        if (!preg_match($value, "/^[A-Za-z]{2,4}(?=.{2,12}$)[-_\s0-9]*(?:[a-zA-Z][-_\s0-9]*){0,2}$/")) {
            throw new \InvalidArgumentException("The value {$value} is not a valid european VAT number");
        }
    }
}
