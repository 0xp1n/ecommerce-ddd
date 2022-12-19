<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Geography;

class Longitude
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

    public function validate(float $longitude)
    {
        if (!filter_var(
            $longitude,
            FILTER_VALIDATE_FLOAT,
            ['options' => ['min_range' => -180, 'max_range' => 180]]
        )) {
            throw new \InvalidArgumentException(
                "The value that represents longitude {$longitude} is not in the range between -180 and 180"
            );
        }
    }
}
