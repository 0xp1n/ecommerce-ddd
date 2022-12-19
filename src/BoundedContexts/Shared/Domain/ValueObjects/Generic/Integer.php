<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Generic;

class Integer
{
    public function __construct(private readonly int $value)
    {
    }

    public function value(): int
    {
        return $this->value;
    }

    public function equalsTo(self $other): bool
    {
        return $this->value() === $other->value();
    }

    public function isBiggerThan(self $other): bool
    {
        return $this->value() > $other->value();
    }

    public function isLessThan(self $other): bool
    {
        return $this->value() < $other->value();
    }

    public function isBiggerThanOrEquals(self $other): bool
    {
        return $this->value() >= $other->value();
    }

    public function isLessThanOrEquals(self $other): bool
    {
        return $this->value() <= $other->value();
    }

    public function sum(self $other): self
    {
        return new self($this->value() + $other->value());
    }

    public function subtract(self $other): self
    {
        return new self($this->value() - $other->value());
    }

    public function multiply(self $other): self
    {
        return new self($this->value() * $other->value());
    }

    public function divide(self $other): self
    {
        return new self((int)($this->value() / $other->value()));
    }

    public function isPositive(): bool
    {
        return $this->value() > 0;
    }

    public function isNegative(): bool
    {
        return $this->value() < 0;
    }

    public function isZero(): bool
    {
        return $this->value() === 0;
    }
}
