<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Money;

use InvalidArgumentException;
use NumberFormatter;
use Shared\Domain\ValueObjects\Generic\Decimal;
use Shared\Domain\ValueObjects\Generic\Integer;
use Shared\Domain\ValueObjects\Generic\Percentage;
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

    public function decimal(): Decimal
    {
        return new Decimal($this->amount()->value() / 100);
    }

    public function currency(): Currency
    {
        return $this->currency;
    }

    public function formatted(Locale $locale = null): string
    {
        return (new NumberFormatter($locale?->value() ?? 'en_US', NumberFormatter::CURRENCY))
            ->formatCurrency($this->decimal()->value(), $this->currency()->value());
    }

    public function equals(self $other): bool
    {
        return $this->isSameCurrency($other) &&
            $other->amount()->equalsTo($this->amount());
    }

    public function isGreaterThanZero(): bool
    {
        return $this->amount()->isGreaterThanZero();
    }
    public function isZero(): bool
    {
        return $this->amount()->isZero();
    }

    public function sum(self $other): self
    {
        if ($this->isSameCurrency($other)) {
            return new self(
                $this->amount()->sum($other->amount()),
                $this->currency()
            );
        }

        throw new InvalidArgumentException("The currency is not the same, cannot be sum");
    }

    public function subtract(self $other): self
    {
        if ($this->isSameCurrency($other)) {
            return new self(
                $this->amount()->subtract($other->amount()),
                $this->currency()
            );
        }

        throw new InvalidArgumentException("The currency is not the same, cannot be substracted");
    }

    public function multiply(self $other): self
    {
        if ($this->isSameCurrency($other)) {
            return new self(
                $this->amount()->multiply($other->amount()),
                $this->currency()
            );
        }

        throw new InvalidArgumentException("The currency is not the same, cannot be multiplied");
    }

    public function increaseByPercentage(Percentage $percentage): self
    {
        return $this->sum(
            new Money(
                new Integer(
                    (int)round($this->amount()->value() * $percentage->value() / 100, 2, PHP_ROUND_HALF_UP)
                ),
                $this->currency()
            )
        );
    }

    public function decreaseByPercentage(Percentage $percentage): self
    {
        return $this->subtract(
            new Money(
                new Integer(
                    (int)round($this->amount()->value() * $percentage->value() / 100, 2, PHP_ROUND_HALF_UP)
                ),
                $this->currency()
            )
        );
    }

    private function isSameCurrency(self $other): bool
    {
        return $this->currency()->equalsTo($other->currency());
    }
}
