<?php

namespace Tests\Shared\Domain\ValueObjects\Internet;

use InvalidArgumentException;
use Shared\Domain\ValueObjects\Internet\Url;
use Tests\Shared\Domain\MotherObjects\UrlMother;
use Tests\TestCase;

class UrlTest extends TestCase
{
    public function test_it_should_throw_exception_when_url_is_not_valid(): void
    {
        $url = 'cockburn.com';

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("The url {$url} is not valid");

        new Url($url);
    }

    public function test_it_should_instantiate_correct_the_object_when_url_is_valid(): void
    {
        $this->expectNotToPerformAssertions();

        new Url(UrlMother::create());
        new Url(UrlMother::create());
        new Url(UrlMother::create());
        new Url("https://shopify.com");
        new Url("http://example.io");
        new Url("https://twitter.com/status/12912891291");
    }
}
