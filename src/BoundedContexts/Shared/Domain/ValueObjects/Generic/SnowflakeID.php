<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Generic;

use Godruoyi\Snowflake\Snowflake;

class SnowflakeID
{
    private readonly int $value;

    public function __construct(int $value = null)
    {
        $this->value = $value ?? self::generate();
    }

    public function value(): int
    {
        return $this->value;
    }

    public static function random(): self
    {
        return new static(self::generate());
    }

    /**
     * Generate a unique id based on the datacenter and start timestamp
     * @param int $datacenter - The identifier for the datacenter, default to 1
     * @param int $worker - The worker related, default to 1
     * @param string $fromDate - In format Y-m-d
     */
    public static function generate(
        int $datacenter = 1,
        int $worker = 1,
        string $fromDate = '2022-12-17'
    ): int {
        $snowflake = new Snowflake($datacenter, $worker);
        $snowflake->setStartTimeStamp(strtotime($fromDate) * 1000);

        return (int)$snowflake->id();
    }
}
