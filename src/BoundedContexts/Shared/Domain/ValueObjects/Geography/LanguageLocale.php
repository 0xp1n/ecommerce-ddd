<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Geography;

use Shared\Domain\ValueObjects\Generic\Text;

class LanguageLocale extends Text
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

    public static function makeFromCountryCode(CountryCode $countryCode): self
    {
        $locale =  \Locale::getPrimaryLanguage(
            $countryCode->value()
        ) . '_' . \Locale::getRegion($countryCode->value());

        return new self($locale);
    }
}
