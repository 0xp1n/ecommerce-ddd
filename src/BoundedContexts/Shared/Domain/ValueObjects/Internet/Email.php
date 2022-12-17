<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Internet;

use Shared\Domain\ValueObjects\Generic\Text;

class Email extends Text
{
    private readonly array $parts;

    public function __construct(string $value)
    {
        parent::__construct($this->validate($value));

        $this->parts = explode('@', $this->value());
    }

    public function parts(): array
    {
        return $this->parts;
    }

    public function local(): string
    {
        return $this->parts[0];
    }

    public function domain(): string
    {
        return $this->parts[1];
    }

    private function validate(string $value): string
    {
        $email = $this->sanitizeEmail($value);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("The value {$value} is not a valid email");
        }

        return $email;
    }

    private function sanitizeEmail(string $value): string
    {
        return filter_var(strtolower(trim($value)), FILTER_SANITIZE_EMAIL);
    }
}
