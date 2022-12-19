<?php

namespace Tests\Shared\Domain\ValueObjects\Money;

use InvalidArgumentException;
use Shared\Domain\ValueObjects\Generic\Integer;
use Shared\Domain\ValueObjects\Generic\Percentage;
use Shared\Domain\ValueObjects\Money\Currency;
use Shared\Domain\ValueObjects\Money\Money;
use Tests\Shared\Domain\MotherObjects\MoneyMother;
use Tests\TestCase;

class MoneyTest extends TestCase
{
    public function test_it_should_be_equals_when_amount_and_currency_are_the_same(): void
    {
        $money = MoneyMother::create(null, new Currency('EUR'));
        $other = MoneyMother::create($money->amount(), $money->currency());

        $this->assertTrue($money->equals($other));
        $this->assertFalse($money->equals(new Money($money->amount(), new Currency('USD'))));
        $this->assertFalse(
            $other->sum(new Money($other->amount()->sum(new Integer(100)), $other->currency()))->equals($other)
        );
    }

    public function test_it_should_sum_only_when_currencies_are_the_same(): void
    {
        $money = MoneyMother::create(new Integer(1000), new Currency('EUR'));
        $result = $money->sum(MoneyMother::create(new Integer(1200), $money->currency()));

        $this->assertEquals(2200, $result->amount()->value());
        $this->assertEquals(22.0, $result->decimal()->value());
    }

    public function test_it_should_subtract_only_when_currencies_are_the_same(): void
    {
        $money = MoneyMother::create(new Integer(1000), new Currency('EUR'));
        $result = $money->subtract(MoneyMother::create(new Integer(500), $money->currency()));

        $this->assertEquals(500, $result->amount()->value());
        $this->assertEquals(5.0, $result->decimal()->value());
    }

    public function test_it_should_multiply_only_when_currencies_are_the_same(): void
    {
        $money = MoneyMother::create(new Integer(1000), new Currency('EUR'));
        $result = $money->multiply(MoneyMother::create(new Integer(2), $money->currency()));

        $this->assertEquals(2000, $result->amount()->value());
        $this->assertEquals(20, $result->decimal()->value());
    }

    public function test_it_should_be_able_to_increase_amount_by_percentage(): void
    {
        $money = MoneyMother::create(new Integer(1000), new Currency('EUR'));
        $result = $money->increaseByPercentage(new Percentage(10));

        $this->assertEquals(1100, $result->amount()->value());
    }

    public function test_it_should_be_able_to_decrease_amount_by_percentage(): void
    {
        $money = MoneyMother::create(new Integer(1000), new Currency('EUR'));
        $result = $money->decreaseByPercentage(new Percentage(10));

        $this->assertEquals(900, $result->amount()->value());
    }

    public function test_it_should_throw_exception_when_try_to_sum_different_currencies(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $money = MoneyMother::create(new Integer(1000), new Currency('EUR'));
        $money->sum(MoneyMother::create(new Integer(500), new Currency('USD')));
    }

    public function test_it_should_throw_exception_when_try_to_subtract_different_currencies(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $money = MoneyMother::create(new Integer(1000), new Currency('EUR'));
        $money->subtract(MoneyMother::create(new Integer(500), new Currency('USD')));
    }

    public function test_it_should_throw_exception_when_try_to_multiply_different_currencies(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $money = MoneyMother::create(new Integer(1000), new Currency('EUR'));
        $money->multiply(MoneyMother::create(new Integer(3), new Currency('USD')));
    }
}
