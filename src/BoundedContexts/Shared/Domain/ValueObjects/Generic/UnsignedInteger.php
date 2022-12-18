<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Generic;

class UnsignedInteger extends Integer
{
    public function __construct(int $value)
    {
        $this->validate($value);

        parent::__construct($value);
    }

    private function validate(int $value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_INT, [
            'options' => [
                'min_range' => 0,
            ],
        ])) {
            throw new \InvalidArgumentException("The given number {$value} cannot be negative");
        }
    }
}
