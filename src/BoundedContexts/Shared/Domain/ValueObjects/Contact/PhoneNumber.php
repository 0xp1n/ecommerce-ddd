<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Contact;

use Shared\Domain\ValueObjects\Generic\Text;

class PhoneNumber extends Text
{
    public const UK_PHONE_REGEX_VALIDATION = "/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\d{6}$/";
    public const PHONE_REGEX_VALIDATION = "/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/";

    public function __construct(string $value)
    {
        parent::__construct($this->validate($value));
    }

    private function validate(string $value): string
    {
        $phone_number = filter_var(trim($value), FILTER_SANITIZE_NUMBER_INT);

        if (empty($phone_number) || !preg_match(self::PHONE_REGEX_VALIDATION, $phone_number)) {
            throw new \InvalidArgumentException("The phone number {$value} is not valid");
        }

        return $phone_number;
    }
}
