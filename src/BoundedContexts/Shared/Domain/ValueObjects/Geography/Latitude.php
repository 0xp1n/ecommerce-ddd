<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Geography;

use Shared\Domain\ValueObjects\Generic\Decimal;

class Latitude extends Decimal
{
    private readonly float $value;

    public function __construct(float $value)
    {
        $this->validate($value);

        $this->value = $value;
    }

    public function value(): float
    {
        return $this->value;
    }

    public function validate(float $latitude)
    {
        if (!filter_var(
            $latitude,
            FILTER_VALIDATE_FLOAT,
            ['options' => ['min_range' => -90, 'max_range' => 90]]
        )) {
            throw new \InvalidArgumentException(
                "The value that represents latitude {$latitude} is not in the range between -90 and 90"
            );
        }
    }
}
