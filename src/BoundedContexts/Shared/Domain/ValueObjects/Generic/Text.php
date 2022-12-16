<?php

namespace Shared\Domain\ValueObjects\Generic;

class Text
{
    public function __construct(public readonly string $value = '')
    {
    }

    public function value(): string
    {
        return $this->value;
    }

    public function sanitized(): string
    {
        return trim(strip_tags($this->value()));
    }

    public function equalsTo(self $other): bool
    {
        return $this->sanitized() === $other->sanitized();
    }

    public function notEqualsTo(self $other): bool
    {
        return !$this->equalsTo($other);
    }

    public function isEmpty(): bool
    {
        return empty($this->value());
    }

    /** Multi-byte character support
     *
     * @return int
     */
    public function count(): int
    {
        return count(preg_split('//u', $this->value(), -1, PREG_SPLIT_NO_EMPTY));
    }

    public function toLowerCase(): string
    {
        return mb_strtolower($this->sanitized(), 'UTF-8');
    }

    public function toUpperCase(): string
    {
        return mb_strtoupper($this->sanitized(), 'UTF-8');
    }
}
