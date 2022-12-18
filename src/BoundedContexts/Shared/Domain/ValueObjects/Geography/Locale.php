<?php

declare(strict_types=1);

namespace Tests\Shared\Domain\ValueObjects\Geography;

use Shared\Domain\ValueObjects\Generic\Text;

class Locale extends Text
{
    public function __construct(string $locale)
    {
        $this->validate($locale);

        parent::__construct($locale);
    }

    public function validate(string $value): void
    {
        if (!in_array($value, \ResourceBundle::getLocales(''))) {
            throw new \InvalidArgumentException("The locale {$value} does not exists");
        }
    }
}
