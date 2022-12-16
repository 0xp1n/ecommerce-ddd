<?php

namespace Shared\Domain\ValueObjects\Internet;

use InvalidArgumentException;
use Shared\Domain\ValueObjects\Generic\Text;

class Url extends Text
{
    public function __construct(public string $value)
    {
        parent::__construct($this->validate($value));
    }

    public function validate(string $url): string
    {
        $sanitizedUrl = filter_var($url, FILTER_VALIDATE_URL);

        if (!$sanitizedUrl) {
            throw new InvalidArgumentException("The url {$url} is not valid");
        }

        return $sanitizedUrl;
    }
}
