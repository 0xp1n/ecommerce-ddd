<?php

namespace Tests\Shared\Domain\MotherObjects;

class MotherCreator
{
    use \Illuminate\Foundation\Testing\WithFaker;

    public function __construct()
    {
        $this->setUpFaker();
    }

    public static function random(string $locale = null): \Faker\Generator
    {
        return (new self())->faker($locale);
    }
}
