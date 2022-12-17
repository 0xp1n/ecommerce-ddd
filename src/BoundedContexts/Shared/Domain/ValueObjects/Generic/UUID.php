<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Generic;

use Ramsey\Uuid\Uuid as RamseyUuid;

class UUID extends Text
{
    public function __construct(string $value)
    {
        $this->validate($value);

        parent::__construct($value);
    }

    public static function random(): self
    {
        return new static(RamseyUuid::uuid4()->toString());
    }

    private function validate(string $uuid): void
    {
        if (!preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i', $uuid)) {
            throw new \InvalidArgumentException("The value {$uuid} is not a valid UUID");
        }
    }
}
