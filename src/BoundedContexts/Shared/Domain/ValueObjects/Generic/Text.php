<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Generic;

class Text
{
    public function __construct(private readonly string $value = '')
    {
    }

    public function value(): string
    {
        return $this->value;
    }

    public function sanitize(): string
    {
        return trim(strip_tags($this->value()));
    }

    public function equalsTo(self $other): bool
    {
        return $this->sanitize() === $other->sanitize();
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
     * More info in https://beamtic.com/count-characters-php
     * @return int
     */
    public function count(): int
    {
        return count(preg_split('//u', $this->value(), -1, PREG_SPLIT_NO_EMPTY));
    }

    public function toLowerCase(): string
    {
        return mb_strtolower($this->sanitize(), 'UTF-8');
    }

    public function toUpperCase(): string
    {
        return mb_strtoupper($this->sanitize(), 'UTF-8');
    }
}
