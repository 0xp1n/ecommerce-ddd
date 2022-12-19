<?php

namespace Tests\Shared\Domain\ValueObjects\Money;

use Shared\Domain\ValueObjects\Money\Currency;
use Tests\Shared\Domain\MotherObjects\CurrencyMother;
use Tests\TestCase;

class CurrencyTest extends TestCase
{
    public function test_it_should_throw_exception_when_currency_is_not_valid(): void
    {
        $code = 'FAKE';

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("The currency {$code} does not exists");

        new Currency($code);
    }

    public function test_it_should_instantiate_correct_with_existing_currency_codes(): void
    {
        $this->expectNotToPerformAssertions();

        new Currency(CurrencyMother::create());
        new Currency(CurrencyMother::create());
        new Currency(CurrencyMother::create());
        new Currency(CurrencyMother::create());
        new Currency(CurrencyMother::create());
        new Currency(CurrencyMother::create());
        new Currency(CurrencyMother::create());
    }
}
