<?php

namespace Tests\Shared\Domain\MotherObjects;

use Shared\Domain\ValueObjects\Generic\Integer;
use Shared\Domain\ValueObjects\Money\Currency;
use Shared\Domain\ValueObjects\Money\Money;

class MoneyMother
{
    public static function create(Integer $amount = null, Currency $currency = null): Money
    {
        return new Money(
            $amount ?? new Integer(IntegerMother::create()),
            $currency ?? new Currency(CurrencyMother::create())
        );
    }
}
