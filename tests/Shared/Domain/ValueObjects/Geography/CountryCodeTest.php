<?php

namespace Tests\Shared\Domain\ValueObjects\Geography;

use Shared\Domain\ValueObjects\Geography\CountryCode;
use Tests\TestCase;

class CountryCodeTest extends TestCase
{
    public function test_it_should_throw_exception_when_code_does_not_exists(): void
    {
        $code = 'FAKE';

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("The country code {$code} does not exists");

        new CountryCode($code);
    }

    public function test_it_should_instantiate_correctly_with_valid_country_codes(): void
    {
        $code1 = new CountryCode('ES');
        $code2 = new CountryCode('al');
        $code3 = new CountryCode('Se');

        $this->assertEquals(['ES', 'Spain'], [$code1->value(), $code1->name()]);
        $this->assertEquals(['AL', 'Albania'], [$code2->value(), $code2->name()]);
        $this->assertEquals(['SE', 'Sweden'], [$code3->value(), $code3->name()]);
    }
}
