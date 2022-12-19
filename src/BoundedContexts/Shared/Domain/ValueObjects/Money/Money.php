<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Money;

use InvalidArgumentException;
use NumberFormatter;
use Shared\Domain\ValueObjects\Generic\Integer;
use Tests\Shared\Domain\ValueObjects\Geography\Locale;

class Money
{
    public function __construct(
        private readonly Integer $amount,
        private readonly Currency $currency
    ) {
    }

    public function amount(): Integer
    {
        return $this->amount;
    }

    public function value(): float
    {
        return $this->amount()->value() / 100;
    }

    public function currency(): Currency
    {
        return $this->currency;
    }

    public function formatted(Locale $locale = null): string
    {
        return (new NumberFormatter($locale?->value() ?? 'en_US', NumberFormatter::CURRENCY))
            ->formatCurrency($this->value(), $this->currency()->value());
    }

    public function equals(self $other): bool
    {
        return $this->isSameCurrency($other) &&
            $other->amount()->equalsTo($this->amount());
    }

    public function isZero(): bool
    {
        return $this->amount()->isZero();
    }

    public function sum(self $other): self
    {
        if ($this->isSameCurrency($other)) {
            return new Money(
                $other->amount()->sum($other->amount()),
                $other->currency()
            );
        }

        throw new InvalidArgumentException("The currency is not the same, cannot be sum");
    }

    public function subtract(self $other): self
    {
        if ($this->isSameCurrency($other)) {
            return new Money(
                $other->amount()->subtract($other->amount()),
                $other->currency()
            );
        }

        throw new InvalidArgumentException("The currency is not the same, cannot be substracted");
    }

    public function multiply(self $other): self
    {
        if ($this->isSameCurrency($other)) {
            return new Money(
                $other->amount()->multiply($other->amount()),
                $other->currency()
            );
        }

        throw new InvalidArgumentException("The currency is not the same, cannot be multiplied");
    }

    public function divide(self $other): self
    {
        if ($this->isSameCurrency($other)) {
            return new Money(
                $other->amount()->divide($other->amount())->multiply(new Integer(100)),
                $other->currency()
            );
        }

        throw new InvalidArgumentException("The currency is not the same, cannot be divided");
    }

    private function isSameCurrency(self $other): bool
    {
        return $this->currency()->equalsTo($other->currency());
    }
}
