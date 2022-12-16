<?php

namespace Tests\Shared\Domain\ValueObjects;

use PHPUnit\Framework\TestCase;
use Shared\Domain\ValueObjects\Generic\Text;

class TextTest extends TestCase
{
    public function test_string_value_object_instantiates(): void
    {
        $string = new Text("Iron man");

        $this->assertInstanceOf(Text::class, $string);
        $this->assertEquals('Iron man', $string->value());
    }

    public function test_string_value_object_count_includes_multibyte_characters(): void
    {
        // The strlen returns a value of 8 when in reality it's 5
        // More info in https://beamtic.com/count-characters-php
        $this->assertEquals(8, strlen('abcd💩'));
        $this->assertEquals(5, (new Text('abcd💩'))->count());
    }


    public function test_string_value_object_equality_methods(): void
    {
        $a = new Text("hulk");
        $b = new Text('wonder woman');

        $this->assertTrue($a->equalsTo(new Text($a->value())));
        $this->assertFalse($a->equalsTo($b));
        $this->assertTrue($a->notEqualsTo($b));
    }

    public function test_string_value_object_lower_and_upper(): void
    {
        $a = new Text("SpidErman");

        $this->assertEquals('SPIDERMAN', $a->toUpperCase());
        $this->assertEquals('spiderman', $a->toLowerCase());
    }
}
