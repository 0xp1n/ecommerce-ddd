<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Generic;

class Percentage extends Decimal
{
    public function __construct(int|float $value)
    {
        parent::__construct($this->validate($value));
    }

    public function validate(int|float $value): float
    {
        $decimal = filter_var($value, FILTER_VALIDATE_FLOAT, [
            'options' => [
                'min_range' => 0,
                'max_range' => 100,
            ]
        ]);

        if (!$decimal) {
            throw new \InvalidArgumentException("The value {$value} is not in the allowed range for percentages");
        }

        return $decimal;
    }
}
